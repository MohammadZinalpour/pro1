<?php include 'partials/header.php'; ?>
<main id="main">
    <section id="hero" class="d-flex align-items-center hero">
        <div class="container text-center">
            <h1>به قالب Tempo خوش آمدید</h1>
            <h2>ما تیمی از طراحان حرفه‌ای و توسعه‌دهندگان هستیم</h2>
            <a href="#about" class="btn-get-started scrollto btn btn-primary">بیشتر بدانید</a>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <div class="section-title text-center">
                <h2>درباره ما</h2>
                <p>تیم فعال و پرتلاش</p>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title text-center">
                <h2>تماس با ما</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-group">
                            <label for="name">نام</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">ایمیل</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">پیام</label>
                            <textarea class="form-control" name="message" rows="5" required></textarea>
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-success">ارسال</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="survey" class="survey">
        <div class="container">
            <div class="section-title text-center">
                <h2>نظرسنجی</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="survey.php" method="POST">
                        <div class="form-group">
                            <label>آیا از سایت ما راضی هستید؟</label>
                            <div class="form-check">
                                <input type="radio" id="yes" name="satisfaction" value="yes" required class="form-check-input">
                                <label for="yes" class="form-check-label">بله</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="no" name="satisfaction" value="no" required class="form-check-input">
                                <label for="no" class="form-check-label">خیر</label>
                            </div>
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-primary">ارسال</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/footer.php'; ?>