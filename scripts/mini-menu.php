
<input type="checkbox" id="hmt" class="hidden-menu-ticker">
<label class="btn-menu" for="hmt">
  <span class="first"></span>
  <span class="second"></span>
  <span class="third"></span>
</label>
<div id="upmenu">
    <center>
        <h1 id="upmenu-text">Интересно о программировании</h1>
    </center>
</div>

<ul class="hidden-menu">
    <?php include "menu-content.php";?>
</ul>

<style>
#upmenu-text {
    margin-top:25px;
    font-size:25pt;
    font-family : "Courier New", Courier, monospace;
}

#upmenu {
    height:90px;
    visibility:hidden;
    background-color:#F1F1F1;
    top:1px;
    position:fixed;
    width:100%;
    left:5px;
}

#upmenu-text {
    bottom:15px;
}

.hidden-menu::-webkit-scrollbar {
  width: 10px;
  background-color: #384046;
}

.hidden-menu::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background-color: #6E6E6E;
}

.hidden-menu::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.2);
  border-radius: 10px;
  background-color: #f9f9fd;
}

.hidden-menu {
    border:30px solid #EEEEEE;
    border-radius:5px;
}

.hidden-menu {
  box-shadow:1px 3px 7px #000000;
  visibility:hidden;
  overflow:auto;
  display: block;
  position: fixed;
  list-style:none;
  padding: 10px;
  box-sizing: border-box;
  width: 200px;
  background-color: #eee;
  top: 1px;
  bottom:1px;
  left: -200px;
  transition: left .2s;
  z-index: 2;
  -webkit-transform: translateZ(0);
  -webkit-backface-visibility: hidden;
}

.hidden-menu-ticker {
  display: none;
}

.btn-menu {
  visibility:hidden;
  border:0px solid #EEEEEE;
  color: #000;
  background-color: #eee;
  padding: 7px;
  position: fixed;
  top: 25px;
  left: 50px;
  cursor: pointer;
  transition: left .23s;
  z-index: 3;
  width: 25px;
  -webkit-transform: translateZ(0);
  -webkit-backface-visibility: hidden;
}
.btn-menu span {
  display: block;
  height: 3px;
  background-color: #000;
  margin: 5px 0 0;
  transition: all .1s linear .23s;
  position: relative;
}
.btn-menu span.first {
  margin-top: 0;
}

.hidden-menu-ticker:checked ~ .btn-menu {
  left: 160px;
}
.hidden-menu-ticker:checked ~ .hidden-menu {
  left: 0;
}
.hidden-menu-ticker:checked ~ .btn-menu span.first {
  -webkit-transform: rotate(45deg);
  top: 8px;
  
}
.hidden-menu-ticker:checked ~ .btn-menu span.second {
  opacity: 0;
}
.hidden-menu-ticker:checked ~ .btn-menu span.third {
  -webkit-transform: rotate(-45deg);
  top: -8px;  
}

#vk-community {
    visibility:hidden;
}
    
.h-menu {
    visibility:hidden;
}
    
#search {
    visibility:hidden;
}
    
.btn-menu {
    visibility:visible;
}
    
.hidden-menu {
    visibility:visible;
}
    
#upmenu {
    visibility:visible;
}
    
#youtube {
    display:none;
}
    
.changemode {
    visibility:hidden;
}
    
body {
    margin-top:8%;
}

</style>
