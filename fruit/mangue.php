<?php require ("header.html");?>
<style>
    span{
        color:#ffc400;
    }
</style>

    <section class="main">
        <video src="video/mangue.mp4" autoplay loop muted type="mp4"></video>
        <img src="mask.jpg" class="mask" alt="">
        <h2><span>Man</span>gue</h2>
        <?php require ("footer.php"); ?>
    </section>

    <?php require ("nav.html"); ?>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
         var dayNight = document.querySelector('.dayNight')
        var menuToggle = document.querySelector('.menuToggle')
        var body = document.querySelector('body')
        var navigation = document.querySelector('.navigation')

        dayNight.onclick = function(){
            body.classList.toggle('dark')
            dayNight.classList.toggle('active')
        }

        menuToggle.onclick = function(){
            menuToggle.classList.toggle('active')
            navigation.classList.toggle('active')
        }
    </script>
</body>
</html>