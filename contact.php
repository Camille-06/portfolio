<link rel="stylesheet" href="style.css">

<?php include 'header.php'; ?>

<main>
    <section class="contact">
        <h1>Contact Me</h1>
        <form action="php/contact-form.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit" name="submit">Send Message</button>
        </form>
    </section>
</main>

<?php include 'footer.php'; ?>
