<?php require ("header.html");?>
<style>

    span{
        -webkit-animation: color-change 10s infinite;
        -moz-animation: color-change 10s infinite;
        -o-animation: color-change 10s infinite;
        -ms-animation: color-change 10s infinite;
        animation: color-change 10s infinite;
    }

    @-webkit-keyframes color-change {
        10% { color: #e14838; }
        20% { color: orange; }
        30% { color: #dc3d49; }
        40% { color: #83e7f6; }
        60% { color: purple; }



    }
    @-moz-keyframes color-change {
        10% { color: #e14838; }
        20% { color: orange; }
        30% { color: #dc3d49; }
        40% { color: #83e7f6; }
        60% { color: purple; }
    }
    @-ms-keyframes color-change {
        10% { color: #e14838; }
        20% { color: orange; }
        30% { color: #dc3d49; }
        40% { color: #83e7f6; }
        60% { color: purple; }
    }
    @-o-keyframes color-change {
        10% { color: #e14838; }
        20% { color: orange; }
        30% { color: #dc3d49; }
        40% { color: #83e7f6; }
        60% { color: purple; }
    }
    @keyframes color-change {
        100% { color: #e14838; }
        20% { color: orange; }
        30% { color: #dc3d49; }
        40% { color: #83e7f6; }
        60% { color: purple; }
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
        <video src="video/junglefruit.mp4" autoplay loop muted type="mp4"></video>
        <img src="mask.jpg" class="mask" alt="">
    <div class="parent">
        <h2> <span>Jungle</span> Fruit</h2>
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