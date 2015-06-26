<?php
/**
 * Created by PhpStorm.
 * User: macuser
 * Date: 15. 6. 25.
 * Time: 오후 9:02
 */
include('include/_header.php');
?>
<style type="text/css">

	/*style for only tree menu element*/
	div.tree_menu {
		display: block;
		left: 0;
		top: 0;
		bottom: 0;
		width: 240px;
		z-index: -10;
		background: #f05f5f;
		overflow-y: scroll;
	}
	div.tree_menu nav li a {
		display: block;
		padding: 10px;
		text-align: center;
	}
	div.tree_menu nav > ul > li > a {
		color: white;
	}
	div.tree_menu nav li li a {
		background: white;
		color: #002144;
	}
	div.tree_menu nav li ul {
		display: none;
	}

	div.tree_menu nav .loginMenu {
		width: 100%;
	}
	div.tree_menu nav .loginMenu li {
		float: left;
		width: 25%;
	}
	div.tree_menu nav .loginMenu li a {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	div.tree_menu nav .loginMenu li.closeMobileGnb {
		font-size: 1.2em;
	}
	div.tree_menu .mobileMainmenu {
		margin-bottom: 50px;
	}
	div.tree_menu .mobileMainmenu > li > a {
		position: relative;
	}
	div.tree_menu .mobileMainmenu > li > a i {
		position: absolute;
		right: 22px;
		top: 50%;
		margin-top: -9px;
	}
</style>

<div id="contentWrap">

	<div class="contentWidth clearFix">

		<div class="lnbWrap col span_6">
			<?include('include/lnb_elements.php');?>
		</div>


		<section class="col span_18">
			<h2>Tree Menu</h2>


			<div class="tree_menu">
				<nav>
					<ul class="treemenu_example">
						<li><a href="#">Main </a>
							<ul>
								<li><a href="main-type1.php">Type1</a></li>
							</ul>
						</li>
						<li><a href="#">Pages </a>
							<ul>
								<li><a href="pages-history.php">연혁</a></li>
								<li><a href="pages-greeting.php">인사말</a></li>
							</ul>
						</li>
						<li><a href="#">Board </a>
							<ul>
								<li><a href="board-list.php">List</a></li>
							</ul>
						</li>
						<li><a href="#">Shop </a>
							<ul>
								<li><a href="shop-type1.php">Type1</a></li>
							</ul>
						</li>
						<li><a href="#">Elements </a>
							<ul>
								<li><a href="elements-typo.php">Typography</a></li>
								<li><a href="elements-accordion.php">Accordion</a></li>
								<li><a href="elements-button.php">Button</a></li>
								<li><a href="elements-tab.php">Tab</a></li>
								<li><a href="elements-modal.php">Modal</a></li>
								<li><a href="elements-input.php">Input</a></li>
								<li><a href="elements-embed.php">Responsive Embed</a></li>
							</ul>
						</li>
						<li class="last"><a href="#">Update Log </a>
							<ul>
								<li><a href="#">History</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</section>


	</div><!-- .contentWidth -->


</div><!-- .contentWrap -->


<script type="text/javascript">
	(function ($) {
		$(document).ready(function () {
			$('ul.treemenu_example').sptreemenu({
				hasIcon: true
			});
		});
	})(jQuery);
</script>
<?php include('include/_footer.php'); ?>
