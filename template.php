<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		<title>Test work</title>
	</head>
	<body>
		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-md-6 col-xs-12">
						<img class="header__logo" src="images/logo_top.png">
					</div>
				</div>
			</div>
		</header>
		<section class="contact">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 offset-xl-4 col-md-4 offset-md-4 col-xs-12 contact__icon">
						<img class="img-fluid" src="images/contact_icon.png">
					</div>
				</div>
				<div class="row">
					<div class="col-xl-5 col-md-12 col-xs-12">
                        <div class="input_box">
                            <label for="contact_name" class="contact__title">Имя <span class="contact__required">*</span>
                            </label>
                            <input type="text" name="contact_name">
                            <div class="error-box"></div>
                        </div>
                        <div class="input_box">
                            <label for="contact_mail" class="contact__title">E-Mail <span class="contact__required">*</span>
                            </label>
                            <input type="email" name="contact_mail">
                            <div class="error-box"></div>
                        </div>
					</div>
					<div class="col-xl-6 offset-xl-1 col-md-12 col-xs-12">
                        <div class="textarea_box">
                            <label for="contact_text" class="contact__title">Комментарий <span class="contact__required">*</span>
                            </label>
                            <textarea name="contact_text"></textarea>
                            <div class="error-box"></div>
                        </div>
					</div>
					<div class="col-xl-3 offset-xl-9 col-md-12 col-xs-12">
						<button class="contact__button">Записать</button>
					</div>
				</div>
			</div>
		</section>
		<section class="comments">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-6 col-md-10 col-xs-12">
						<h2 class="comments__title">Выводим комментарии</h2>
					</div>
				</div>
				<div class="row ml-0 mr-0 comments__box">
                    <?php if($comments): ?>
                        <?php foreach ($comments as $comment): ?>
                        <div class="col-xl-4 col-md-6 col-xs-12 comments__block">
                            <div class="comments__head d-flex align-items-center justify-content-center">
                                <p><?=$comment['name']?></p>
                            </div>
                            <div class="comments__body">
                                <div class="comments__mail">
                                    <?=$comment['mail']?>
                                </div>
                                <div class="comments__text">
                                    <?=$comment['text']?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
				</div>
			</div>
		</section>
		<footer class="footer">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-3 col-md-6 col-xs-12">
						<img class="footer__logo" src="images/logo_bottom.png">
					</div>
					<div class="col-xl-1 offset-xl-7 col-md-1 offset-md-4 col-xs-6 d-flex justify-content-center">
						<div class="footer__circle">
							<i class="fab fa-vk"></i>
						</div>
					</div>
					<div class="col-xl-1 col-md-1 col-xs-6 d-flex justify-content-center">
						<div class="footer__circle">
							<i class="fab fa-facebook-f"></i>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src="https://kit.fontawesome.com/d61e5f54c1.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="js/script.js"></script>
	</body>
</html>