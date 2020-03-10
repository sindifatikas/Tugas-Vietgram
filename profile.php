<?php 
    session_start();
    include "koneksi.php";
    $query = mysqli_query($connect,"SELECT * from profile where id= ' ".$_SESSION["id"]."'");
    $data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="feed.php">
                <img src="images/logo.png" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="explore." class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="profile.php" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="profile">
        <header class="profile__header">
            <div class="profile__column">
                <img src="images/avatarr.jpg" />
            </div>
            <div class="profile__column">
                <div class="profile__title">
                    <h3 class="profile__username"><?php echo $data['username'];?></h3>
                    <a href="edit-profile.php">Edit profile</a>
                    <i class="fa fa-cog fa-lg"></i>
                </div>
                <ul class="profile__stats">
                    <li class="profile__stat">
                        <span class="stat__number">4</span> posts
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">1207</span> followers
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">12</span> following
                    </li>
                </ul>
                 <p class="profile__bio">
                    <span class="profile__full-name">
                        <?php echo $data['name']; ?>
                    </span> <?php echo $data['bio']; ?>
                    <a href="#"><?php echo $data['website']; ?></a>
                </p>
            </div>
        </header>
        <section class="profile__photos">
            <div class="profile__photo">
                <img src="images/feedPhoto1.jpg" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                        1020
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                        3
                    </span>
                </div>
            </div>
            <div class="profile__photo">
                <img src="images/feedPhoto2.jpg" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                            <i class="fa fa-heart"></i>
                            486
                        </span>
                    <span class="overlay__item">
                            <i class="fa fa-comment"></i>
                            344
                    </span>
                </div>
            </div>
            <div class="profile__photo">
                <img src="images/feedPhoto3.jpg" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                                <i class="fa fa-heart"></i>
                                486
                            </span>
                    <span class="overlay__item">
                                <i class="fa fa-comment"></i>
                                344
                            </span>
                </div>
            </div>
            <div class="profile__photo">
                <img src="images/feedPhoto4.jpg" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                                    <i class="fa fa-heart"></i>
                                    486
                                </span>
                    <span class="overlay__item">
                                    <i class="fa fa-comment"></i>
                                    344
                                </span>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__column">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Support</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Blog</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Press</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Api</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Jobs</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Privacy</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Terms</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Directory</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Language</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer__column">
            <span class="footer__copyright">© 2017 Vietgram</span>
        </div>
    </footer>
</body>

</html>