<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<?php
$data = [
    [
        'title' => 'الصحافة',
        'background' => 'images/1.jpg',
        'image' => './images/opinion-1.jpg',
    ],
    [
        'title' => 'أخبار العالم',
        'background' => 'images/2.jpg',
        'image' => './images/opinion-1.jpg',
    ],
    [
        'title' => 'كورونا',
        'background' => 'images/3.jpg',
        'image' => './images/opinion-1.jpg',
    ],
    [
        'title' => 'الصحافة',
        'background' => 'images/4.jpg',
        'image' => './images/opinion-1.jpg',
    ],
    [
        'title' => 'لبنان',
        'background' => './images/5.jpg',
        'image' => './images/opinion-1.jpg',
    ],
]
?>

<body>
    <section id="stories">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="stories-container">
                        <?php
                        foreach ($data as $key => $story) {
                        ?>
                            <div class="story-col">
                                <div class="story" data-story-index="<?= $key; ?>" style="background-image:url('./images/<?= $key + 1; ?>.jpg')">
                                    <div class="story-borderd">
                                        <img class="story-image" src="<?= $story['image']; ?>">
                                        <div class="story-title"><?= $story['title']; ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="story-items">
        <div class="story-items">
            <a href="javascript::void(0)" class="close-story-items">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3.15527" y="2" width="27.3575" height="2.27979" transform="rotate(45 3.15527 2)" fill="white" />
                    <rect x="22.5" y="3.6123" width="27.3575" height="2.27979" transform="rotate(135 22.5 3.6123)" fill="white" />
                </svg>
            </a>
            <div class="story-item">
                <div class="story-prev">
                    <svg width="16" height="32" viewBox="0 0 16 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.9497 16L3.94976 32L0.716644 30.5752L11.648 16L0.716646 1.42484L3.94976 7.10486e-06L15.9497 16Z" fill="white" />
                    </svg>
                </div>

                <div class="story-item-background" style="">
                    <div class="story-video-container"></div>

                    <div class="story-timeline">
                    </div>
                    <div class="story-item-container">
                        <div class="story-info">
                            <img class="story-info-image" src="">
                            <div class="story-info-title"></div>
                            <div class="story-control">
                                <div class="story-pause">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="16" cy="16" r="15.5" fill="white" fill-opacity="0.2" stroke="white" />
                                        <path d="M18.6694 10.0146C17.9437 10.0146 17.3555 10.6029 17.3555 11.3286V20.672C17.3555 21.3976 17.9437 21.9859 18.6694 21.9859C19.395 21.9859 19.9833 21.3976 19.9833 20.672V11.3286C19.9833 10.6029 19.3951 10.0146 18.6694 10.0146Z" fill="white" />
                                        <path d="M13.3305 10.0146C12.6049 10.0146 12.0166 10.6029 12.0166 11.3286V20.672C12.0166 21.3976 12.6049 21.9859 13.3305 21.9859C14.0562 21.9859 14.6444 21.3976 14.6444 20.672V11.3286C14.6444 10.6029 14.0562 10.0146 13.3305 10.0146Z" fill="white" />
                                    </svg>
                                </div>
                                <div class="story-mute">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="16" cy="16" r="15.5" fill="white" fill-opacity="0.2" stroke="white"/>
                                        <path d="M19.9989 9.50225C19.9989 9.31228 19.8889 9.13231 19.7189 9.05232C19.539 8.96234 19.339 8.99233 19.189 9.11231L14.7598 12.6417L19.9989 17.8808V9.50225Z" fill="white"/>
                                        <path d="M22.8524 22.1451L9.85457 9.1472C9.6596 8.95223 9.34266 8.95223 9.14769 9.1472C8.95272 9.34217 8.95272 9.65912 9.14769 9.85409L12.2932 13.0006H12.0002C11.6903 13.0006 11.4203 13.1405 11.2403 13.3605C11.0904 13.5305 11.0004 13.7604 11.0004 14.0004V17.9997C11.0004 18.5497 11.4503 18.9996 12.0002 18.9996H14.3198L19.189 22.8889C19.279 22.9589 19.389 22.9989 19.499 22.9989C19.5689 22.9989 19.6489 22.9789 19.7189 22.9489C19.8889 22.8689 19.9989 22.689 19.9989 22.499V20.7063L22.1445 22.8519C22.2425 22.9499 22.3705 22.9989 22.4985 22.9989C22.6264 22.9989 22.7544 22.9499 22.8524 22.8529C23.0474 22.657 23.0474 22.341 22.8524 22.1451Z" fill="white"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="story-item-content">
                            <h4 class="story-item-title"></h4>
                            <div class="story-item-more-link">
                                <a href="#">المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="story-next">
                    <svg width="16" height="32" viewBox="0 0 16 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0502909 16L12.0502 1.5736e-06L15.2834 1.42483L4.35203 16L15.2834 30.5752L12.0502 32L0.0502909 16Z" fill="white" />
                    </svg>
                </div>

            </div>
        </div>
    </div>
    <script>
        var start_time_ms = 0;
        var story_timer_step = 3000;
        var story_timer_handle;
        var story_interval_handle;
        var story_is_paused = false;
        var stories_data = [{
                title: 'الصحافة',
                background: './images/1.jpg',
                image: './images/opinion-1.jpg',
                items: [{
                        item_type: 'photo',
                        item_src: './images/1.jpg',
                        item_title: 'هل تحوّل غوغل الكتب الورقية إلى “كتب صوتية”؟',
                        item_date: '6 - ديسمبر - 2020 3:35 مساءً',
                        item_link: '#',
                    },
                    {
                        item_type: 'video',
                        item_src: 'https://sawt.motif.net/wp-content/uploads/2020/12/2.mp4',
                        item_title: 'هل تحوّل غوغل الكتب الورقية إلى “كتب صوتية”؟',
                        item_date: '6 - ديسمبر - 2020 3:35 مساءً',
                        item_link: '#',
                    },
                    {
                        item_type: 'photo',
                        item_src: './images/2.jpg',
                        item_title: 'هل تحوّل غوغل الكتب الورقية إلى “كتب صوتية”؟',
                        item_date: '6 - ديسمبر - 2020 3:35 مساءً',
                        item_link: '#',
                    },
                    {
                        item_type: 'photo',
                        item_src: './images/3.jpg',
                        item_title: 'هل تحوّل غوغل الكتب الورقية إلى “كتب صوتية”؟',
                        item_date: '6 - ديسمبر - 2020 3:35 مساءً',
                        item_link: '#',
                    },
                ],
            },
            {
                title: 'أخبار العالم',
                background: './images/2.jpg',
                image: './images/opinion-1.jpg',
                items: [{
                    item_type: 'photo',
                    item_src: './images/2.jpg',
                    item_title: 'هل تحوّل غوغل الكتب الورقية إلى “كتب صوتية”؟2',
                    item_date: '6 - ديسمبر - 2020 3:35 مساءً',
                    item_link: '#',
                }],
            },
            {
                title: 'كورونا',
                background: './images/3.jpg',
                image: './images/opinion-1.jpg',
                items: [{
                    item_type: 'photo',
                    item_src: './images/3.jpg',
                    item_title: 'هل تحوّل غوغل الكتب الورقية إلى “كتب صوتية”؟3',
                    item_date: '6 - ديسمبر - 2020 3:35 مساءً',
                    item_link: '#',
                }],
            },
            {
                title: 'الصحافة',
                background: './images/4.jpg',
                image: './images/opinion-1.jpg',
                items: [{
                    item_type: 'photo',
                    item_src: './images/4.jpg',
                    item_title: 'هل تحوّل غوغل الكتب الورقية إلى “كتب صوتية”؟4',
                    item_date: '6 - ديسمبر - 2020 3:35 مساءً',
                    item_link: '#',
                }],
            },
            {
                title: 'لبنان',
                background: './images/5.jpg',
                image: './images/opinion-1.jpg',
                items: [{
                    item_type: 'photo',
                    item_src: './images/5.jpg',
                    item_title: 'هل تحوّل غوغل الكتب الورقية إلى “كتب صوتية”؟5',
                    item_date: '6 - ديسمبر - 2020 3:35 مساءً',
                    item_link: '#',
                }],
            },
        ];
        jQuery(document).ready(function() {

            // on click story
            jQuery('.story').click(function() {
                var story_index = jQuery(this).data('story-index');
                var story = stories_data[story_index];
                view_story(story_index);
                //view_story_item(story_index, 0);
                jQuery('#story-items').slideDown(100);
            });

            // on click close (x) button
            jQuery('.close-story-items').click(function() {
                storyClose();
            });

            // on click next story
            jQuery('.story-next').click(function() {
                go_to_next_item();
            });

            // on click previous story
            jQuery('.story-prev').click(function() {
                go_to_prev_item();
            });


            jQuery('.story-pause').click(function() {
                story_pause();
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
            await story_video_duration(item);
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
                function() {
                    if (!story_is_paused) {
                        jQuery('.story-timeline-progress.active .story-timeline-progress-bar').css('width', getRemainingTime() + '%');
                    }
                }, 10);
            story_timer_handle = setTimeout(function() {
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

        var story_video_duration = function(item) {
            return new Promise(function(resolve, reject) {
                if (item.item_type == 'video') {

                    var video = document.createElement('video');
                    video.src = item.item_src;
                    video.addEventListener('loadedmetadata', function() {
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

        function story_pause(){
            story_is_paused = true;
        }
        
    </script>
</body>

</html>