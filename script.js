
var start_time_ms = 0;
var story_timer_step = 3000;
var story_timer_handle;
var story_interval_handle;
$(document).ready(function () {

    // on click story
    jQuery('.story').click(function () {
        var story_index = jQuery(this).data('story-index');
        var story = stories_data[story_index];
        view_story(story_index);
        //view_story_item(story_index, 0);
        jQuery('#story-items').slideDown(100);
    });

    // on click close (x) button
    jQuery('.close-story-items').click(function () {
        storyClose();
    });

    // on click next story
    jQuery('.story-next').click(function () {
        go_to_next_item();
    });

    // on click previous story
    jQuery('.story-prev').click(function () {
        go_to_prev_item();
    });
});

function view_story(story_index) {
    var story = stories_data[story_index];
    jQuery('.story-timeline').html('');
    for (i = 0; i < story.items.length; i++) {
        jQuery('.story-timeline').append(`
        <span class="story-timeline-progress" index="` + i + `"><span class="story-timeline-progress-bar"></span></span>
        `);
    }
    jQuery('.story-info-title').text(story.title);
    jQuery('.story-info-image').attr('src', story.image);
    view_story_item(story_index, 0);

}

async function view_story_item(story_index, item_index) {
    clearTimeout(story_timer_handle);
    clearInterval(story_interval_handle);
    var story = stories_data[story_index];
    var item = story.items[item_index];
    if (item.item_type == 'video') {
        jQuery('.story-video-container').show();
        jQuery('.story-video-container').html(`
        <video width="320" id="story-item-video" height="240" autoplay>
                <source src="` + item.item_src + `" type="video/mp4">
        </video>`);
    } else {
        jQuery('.story-video-container').html('');
        jQuery('.story-video-container').hide();
    }
    jQuery('.story-item-background').css('background-image', 'url(' + item.item_src + ')');
    jQuery('.story-item-title').text(item.item_title);
    jQuery('.story-item-more-link a').attr('href', item.item_link);
    jQuery('.story-timeline span').removeClass('active');
    jQuery('.story-timeline span[index=' + item_index + ']').addClass('active');
    jQuery('.story-prev').attr('story-index', story_index);
    jQuery('.story-next').attr('story-index', story_index);
    jQuery('.story-prev').attr('current-index', item_index);
    jQuery('.story-next').attr('current-index', item_index);
    await storyVideoDuration(item);
    storyTimerProgress();

}

function go_to_next_item() {
    var current_index = parseInt(jQuery('.story-next').attr('current-index'));
    var story_index = parseInt(jQuery('.story-next').attr('story-index'));
    var story = stories_data[story_index];
    jQuery('.story-timeline-progress[index=' + current_index + '] .story-timeline-progress-bar').css('width', '100%');
    current_index++;
    if ((story_index + 1) >= stories_data.length) {
        storyClose();
    } else if (story.items.length <= current_index) {
        view_story(story_index + 1);
    } else {
        view_story_item(story_index, current_index);
    }
}

function go_to_prev_item() {
    var current_index = parseInt(jQuery('.story-prev').attr('current-index'));
    var story_index = parseInt(jQuery('.story-prev').attr('story-index'));
    jQuery('.story-timeline-progress[index=' + current_index + '] .story-timeline-progress-bar').css('width', '0%');
    if (current_index != 0) {
        view_story_item(story_index, current_index - 1)
    } else if (story_index != 0) {
        view_story(story_index - 1);
    }
}

function storyTimerProgress() {
    start_time_ms = (new Date()).getTime();
    story_interval_handle = setInterval(
        function () {
            jQuery('.story-timeline-progress.active .story-timeline-progress-bar').css('width', getRemainingTime() + '%');
        }, 10);
    story_timer_handle = setTimeout(function () {
        go_to_next_item();
    }, story_timer_step);
}

function getRemainingTime() {
    var result = story_timer_step - ((new Date()).getTime() - start_time_ms);

    result = (story_timer_step - result) / story_timer_step * 100;
    return Math.floor(result);;
}

function storyClose() {

    clearTimeout(story_timer_handle);
    clearInterval(story_interval_handle);
    jQuery('#story-items').slideUp(100);
    jQuery('.story-video-container').html('');
}

var storyVideoDuration = function (item) {
    return new Promise(function (resolve, reject) {
        if (item.item_type == 'video') {

            var video = document.createElement('video');
            video.src = item.item_src;
            video.addEventListener('loadedmetadata', function () {
                // duration is now available here
                story_timer_step = video.duration * 1000;
                resolve();
            });
        } else {
            story_timer_step = 3000;
            resolve();
        }

    });
}