<div id="wptime-plugin-preloader"></div>
<div class="navbar top-bar">
    <div class="navbar__wrapper container">
        <div class="navbar__wrapper--left">
            <div class="navbar__logo-container">
                <a href="<?php echo home_url('/'); ?>" class="navbar__logo">
                    <span class="first-text">Tabla</span><span class="second-text">Pe</span>
                </a>
            </div>
        </div>


        <!--Burger Menu-->
<!-- 
        <div class="navbar__wrapper--right dekstop">
            <ul class="navbar__link-container">
                <li class="navbar__li">
                    <a class="navbar__a" href="<?php echo home_url(''); ?>"> Home </a>
                </li>
                <li class="navbar__li">
                    <a class="navbar__a" href="<?php echo home_url('/videos'); ?>"> Videos </a>
                </li>
                <li class="navbar__li">
                    <a class="navbar__a" href="<?php echo home_url('/podcasts'); ?>"> Podcasts </a>
                </li>
                <li class="navbar__li">
                    <a class="navbar__a" href="<?php echo home_url('/history'); ?>"> History </a>
                </li>
            </ul>
        </div> -->

        <div class="burger-menu mobile">
          <div class="burger-icon" id="burger-icon">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
          <ul class="navbar__link-container menu-items" id="menu-items">
            <li class="navbar__li">
                <a class="navbar__a" href="<?php echo home_url(''); ?>"> Home </a>
            </li>
            <li class="navbar__li">
                <a class="navbar__a" href="<?php echo home_url('/videos'); ?>"> Videos </a>
            </li>
            <li class="navbar__li">
                <a class="navbar__a" href="<?php echo home_url('/podcasts'); ?>"> Podcasts </a>
            </li>
            <li class="navbar__li">
                <a class="navbar__a" href="<?php echo home_url('/history'); ?>"> History </a>
            </li>
        </ul>
        </div>



    </div>
</div>



<style>
.burger-menu {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: white;
  padding: 10px;
}

.burger-icon {
  cursor: pointer;
  display: none;
  flex-direction: column;
}

.bar {
  width: 25px;
  height: 3px;
  background-color: #171940;
  margin: 3px 0;
}
a.navbar__a {
    padding: 5px 15px;
}
.menu-items {
  list-style: none;
  display: flex;
  gap: 20px;
}
@media only screen and (max-width: 768px) {
    .navbar .navbar__link-container{
        display: none;
    }
body .navbar__wrapper.container, body .footer__wrapper.container {
    padding: 0 30px;
}
  .burger-menu {
    flex-direction: column-reverse;
  }

  .burger-icon {
    display: flex;
    order: 2;
  }
ul#menu-items li {
    display: inline-block;
    width: 1100%;
    padding: 7px 25px;
    /* box-shadow: 10px 10px black; */
}
  .menu-items {
    display: none;
    flex-direction: column;
    position: absolute;
    top: 60px;
    right: 0; /* Changed left to right */
    width: 100%;
    background-color: white;
  }

  .menu-items.show {
    display: flex;
  }

  .menu-items li {
    text-align: left;
  }
   .navbar__wrapper--right.dekstop{
        display:none;
  }
  ul#menu-items {    
    box-shadow: 0 3px 3px #562C0A30;
 }
 body .element-box.container {
    width: 144%;
}
.group-filter .elemet-box__filter-boxes .elemet-box__filter-box.filter.filter__group.pointer {
    margin-right: 31.3px;
    text-align: center;
}
}
</style>


<script>
document.getElementById('burger-icon').addEventListener('click', function() {
  document.getElementById('menu-items').classList.toggle('show');
});

</script>