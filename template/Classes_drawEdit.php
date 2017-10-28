<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Classes
 *
 * @author gail
 */
 class menu {
     public $color ='<div id="mydiv">
  <div id="mydivheader">Click here to move</div>
    <button onclick="javascript:clearArea();return false;">Clear Area</button>
        Line width : <select id="selWidth">
            <option value="1">1</option>
            <option value="3">3</option>
            <option value="5">5</option>
            <option value="7">7</option>
            <option value="9" selected="selected">9</option>
            <option value="11">11</option>
        </select>
          Color : <select id="selColor">
            <option value="black">black</option>
            <option value="blue" selected="selected">blue</option>
            <option value="red">red</option>
            <option value="green">green</option>
            <option value="yellow">yellow</option>
            <option value="gray">gray</option>
        </select>
    <button onclick="po();return false;">Clear Area</button>
    <button onclick="pobear();return false;">text</button>
    <input id="jr" value=""/>
    
     Line width : <select id="fontSize">
            <option value="1">1</option>
            <option value="3">3</option>
            <option value="5">5</option>
            <option value="7">7</option>
            <option value="9" selected="selected">9</option>
            <option value="120">120</option>
        </select>
     
     <button id="rectC" onclick="rect();return false;">rect</button>
</div>';
 }
 $Menu = new menu ();