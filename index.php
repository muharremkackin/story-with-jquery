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
                            <div class="col">
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
                                    <img src="./images/pause.svg">
                                </div>
                                <div class="story-mute">
                                    <img src="./images/mute.svg">
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
        var story_timer_step = null;
        // var story_timer_handle;
        var story_interval_handle;
        var story_is_paused = false;
        var story_is_muted = true;
        var stories_data = [{
                title: 'الصحافة',
                background: './images/1.jpg',
                image: './images/opinion-1.jpg',
                items: [{
                        item_type: 'photo',
                        item_src: './images/full.jpg',
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
                if (story_is_paused == false) {
                    storyPause();
                } else {
                    storyResume();
                }
            });

            jQuery('.story-mute').click(function() {
                if (story_is_muted == false) {
                    storyMute();
                } else {
                    storyUnmute();
                }
            });
            set_story_width();
            jQuery(window).on('resize', function(){
                set_story_width();
            });
        });
        function set_story_width(){
            var window_height = jQuery(window).height();
            var sotry_ratio = (384 / 778) * (window_height);
            jQuery('.story-item-background').css({'flex':'0 0' + sotry_ratio + 'px','width':sotry_ratio + 'px'})
        }
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
            // clearTimeout(story_timer_handle);
            clearInterval(story_interval_handle);
            var story = stories_data[story_index];
            var item = story.items[item_index];
            if (item.item_type == 'video') {
                var muted = story_is_muted ? 'muted' : '';
                jQuery('.story-video-container').show();
                jQuery('.story-video-container').html(`
                <video width="320" ` + muted + ` id="story-item-video" height="240" autoplay>
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
            start_time_ms = 0;
            story_interval_handle = setInterval(
                function() {
                    if (story_is_paused == false) {
                        jQuery('.story-timeline-progress.active .story-timeline-progress-bar').css('width', getRemainingTime() + '%');
                    }
                }, 10);
        }

        function getRemainingTime() {
            var result = (100 / story_timer_step) * 10;
            start_time_ms = start_time_ms + result;
            if (start_time_ms >= 100) {
                go_to_next_item();
            }
            return Math.floor(start_time_ms);;
        }

        function storyClose() {

            //clearTimeout(story_timer_handle);
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

        function storyPause() {
            story_is_paused = true;
            var vid = document.getElementById("story-item-video");
            if (vid) {
                vid.pause();
            }
            jQuery('.story-pause img').attr('src', './images/play.svg');

        }

        function storyResume() {
            story_is_paused = false;
            var vid = document.getElementById("story-item-video");
            if (vid) {
                vid.play();
            };
            jQuery('.story-pause img').attr('src', './images/pause.svg');
        }

        function storyMute() {
            story_is_muted = true;
            var vid = document.getElementById("story-item-video");
            if (vid) {
                vid.muted = true;
            }
            jQuery('.story-mute img').attr('src', './images/mute.svg');

        }

        function storyUnmute() {
            story_is_muted = false;
            var vid = document.getElementById("story-item-video");
            if (vid) {
                vid.muted = false;
            };
            jQuery('.story-mute img').attr('src', './images/sound.svg');
        }
    </script>
</body>

</html>