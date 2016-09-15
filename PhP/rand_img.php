<?php
 $images = ['img1', 'img2', 'img3', 'img4', 'img5',
 'img6', 'img7', 'img8'];
 $i = rand(0, count($images)-1);
 $selectedImage = "./{$images[$i]}.jpg";