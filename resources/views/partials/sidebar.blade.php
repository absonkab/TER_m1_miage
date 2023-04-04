<nav> 
	<!-- Menu Toggle btn-->
	<div class="menu-toggle">
		<h3>Menu</h3>
		<button type="button" id="menu-btn"> <span class="icon-bar">
			</span> <span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
		</button>
	</div>
	<!-- Responsive Menu Structure--> 
	<!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
	<ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
		<li>
			<a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> <span>Tableau de bord</span></a>
		</li>
		<li>
			<a href="{{ route('home') }}"><i class="fa fa-bullseye"></i> <span>Créer un nouveau Post-It</span></a>
		</li>
		<li>
			<a href="{{ route('home') }}"><i class="fa fa-bullseye"></i> <span>Partager un Post-It</span></a>
		</li>
	</ul>
</nav>