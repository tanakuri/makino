<?php
$title = 'Books';
$tab = 'books';
include('includes/header.php');				
?>
		<link href='css/books.css' rel='stylesheet' type='text/css'>
		<script src="js/books.js" type="text/javascript"></script>
	</head>
	<body>
		<?php include('includes/top.php'); ?>
			<ul id="books">
<?php		
	foreach ($books as $i => $value){
?>
				<li id="<?php echo $value[2]; ?>" class="book <?php if( $i == 0 ) echo 'selected'; ?>">
					<a name="<?php echo $i; ?>"></a>
					<img src="<?php echo $value[1]; ?>"/>
				</li>
<?php
	}
?>
				<li class="viewfinder">			
				</li>
			</ul>
<?php
	foreach ($books as $i => $value){
?>
			<div class="showcase">
				<div class="sc-left">
					<img src="<?php echo $value[1]; ?>"/>
				</div>
				<div class="sc-right">
					<div class="description mako">
						<h3 <?php if( $value[3] ) echo 'class="double"'; ?>> 
						<?php echo $value[2]; if( $value[3] ) echo '<br/><span>'.$value[3].'</span>'; ?>
						</h3>
						<p><?php echo $value[4]; ?></p>
						<a target="_blank" href="<?php echo $value[5]; ?>"><div class="amazon-button"></div></a>
					</div>
				</div>
			</div>
<?php
	}
?>			
		<?php include('includes/bottom.html'); ?>
	</body>
</html>