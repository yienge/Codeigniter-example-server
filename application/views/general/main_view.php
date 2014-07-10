<head>
<style>
a { font-family: Georgia, Serif; font-style: italic; color: #666; }
</style>
<title><?php echo $title;?></title>
</head>
<body>
	<h1><?php echo $heading;?></h1>

	<h2><?php echo $message;?></h2>

	<h3>
		<ul>
	<?php foreach ($list as $item) {
			echo '<li>'.$item.'</li>';
		  }
	?>
		</ul>
	</h3>

	<h3>
		<p>
		<hr>
	<?php foreach ($query->result() as $row) {
			echo 'title: '.$row->title.'</br>';
			echo 'content: '.$row->content.'</br>';
			echo 'file1: '.$row->file1.'</br>';
			echo 'file2: '.$row->file2.'</br>';
			echo 'file3: '.$row->file3.'</br>';
			echo 'date: '.$row->date.'</br>';
			echo '<hr>';
		  }
	?>
		</p>
	</h3>

<a href='main/googlemapslider'>Google Map Slider: javascript example as branch informations</a></br>
<a href='main/onepageresume'>One Page Resume: CSS example</a></br>
<a href='main/remotelinking'>Remote Linking: CSS example as teacher introductions</a></br>
<a href='main/magicline'>Magic Line Navigation: CSS & jQuery example as navigation bar</a></br>

</body>
