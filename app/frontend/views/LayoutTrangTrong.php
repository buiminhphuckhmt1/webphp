<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../template/libs/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="../template/css/style.css">
    <title>Thanh niên tình nguyện Haui
    </title>
    <link href="../template/images/comon/logo_tntn.png" rel="shortcut icon" type="image/png">
</head>

<body>
    <div id="app">
        <?php include "Views/HeaderView.php"; ?>
        <main>
        <?php echo $contentMvc; ?>
        </main>
    </div>
<style>

#modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 20;

}
.modal-content {
  position: absolute;
  top: 50%;
  left: 50%;
  max-width:400px;
  margin-right:auto;
  margin-left:auto;
  transform: translate(-50%, -50%);
  background-color: white;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
}

.close {
  position: absolute;
  right: 20px;
  top: 20px;
  border-radius:10px;
  background-color:#000;
  color:#ffffff;
  padding:0 10px;
  cursor: pointer;
}
</style>
</body>


<!-- vue core -->
<script src="../template/js/vue.js"></script>
<script src="../template/js/httpVueLoader.js"></script>
<!-- end vue core -->

<script src="../template/js/jquery-3.4.1.js"></script>
<script src="../template/libs/swiper/swiper-bundle.js"></script>
<script src="../template/libs/bootstrap/popper.min.js"></script>
<script src="../template/libs/bootstrap/bootstrap.min.js"></script>
<script src="../template/libs/gsap/gsap.min.js"></script>
<script src="../template/js/main.js"></script>
<script>
    var app = new Vue({
        el: "#app",
        components: {
            myheader: httpVueLoader("../template/vue_components/header.vue"),
        },
        mounted() {
            this.$nextTick(() => {

                $(window).bind("load", function () {
const modal = document.querySelector("#modal");
const close = document.querySelector(".close");
modal.style.display = "<?php echo ($_SESSION["status"]);?>";

close.addEventListener("click", () => {
  modal.style.display = "none";
});

window.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});

                    // Home Banner
                    var homeswipper = new Swiper("#homeswipper .mySwiper", {
                        slidesPerView: 1,
                        speed: 1500,
                        autoplay: {
                            delay: 5000,
                        },
                        navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        dynamicBullets: true,
                    },
                    });
                    var categorymonths = new Swiper("#categorymonths .mySwiper", {
                        slidesPerView: 1,
                        speed: 1500,
                        autoplay: {
                            delay: 5000,
                        },
                        navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        dynamicBullets: true,
                    },
                    });

                    // Home events               

                    iconInterval();
                    fixedsocialPopup();
                    triggerFixedEle();
                })
            });
        },
    });
</script>

</html>