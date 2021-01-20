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
        
        

       


        

        
        
    </script>
    <script type="text/javascript" src="./script.js"></script>
</body>

</html>