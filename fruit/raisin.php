<?php require ("header.html");?>
<style>

    span{
        color:#742f74;
    }
    .parent{
        z-index: 4;
    }
    button{
        display: flex;
    margin: 0 auto;
    width: 124px;
    justify-content: center;

    }
</style>
    <section class="main">
        <video src="video/raisin.mp4" autoplay loop muted type="mp4"></video>
        <img src="mask.jpg" class="mask" alt="">
    <div class="parent">
        <h2> <span> Rai</span>sin</h2>
    </div>
        
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