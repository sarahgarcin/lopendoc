<?php get_template_part('templates/head'); ?>

<body <?php body_class(); ?>>

<script>
/* Modernizr 2.8.3 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-
 */
;window.Modernizr=function(a,b,c){function t(a){i.cssText=a}function u(a,b){return t(prefixes.join(a+";")+(b||""))}function v(a,b){return typeof a===b}function w(a,b){return!!~(""+a).indexOf(b)}function x(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:v(f,"function")?f.bind(d||b):f}return!1}var d="2.8.3",e={},f=b.documentElement,g="modernizr",h=b.createElement(g),i=h.style,j,k={}.toString,l={},m={},n={},o=[],p=o.slice,q,r={}.hasOwnProperty,s;!v(r,"undefined")&&!v(r.call,"undefined")?s=function(a,b){return r.call(a,b)}:s=function(a,b){return b in a&&v(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=p.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(p.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(p.call(arguments)))};return e});for(var y in l)s(l,y)&&(q=y.toLowerCase(),e[q]=l[y](),o.push((e[q]?"":"no-")+q));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)s(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof enableClasses!="undefined"&&enableClasses&&(f.className+=" "+(b?"":"no-")+a),e[a]=b}return e},t(""),h=j=null,e._version=d,e}(this,this.document);

		if( window.top !== window.self ) {
			document.getElementsByTagName('body')[0].className += ' iframe';
		}
		if(window.location.href.indexOf("fee=visible") > -1) {
			document.getElementsByTagName('body')[0].className += ' show-editor';
		}
		if(window.location.href.indexOf("type=newpost") > -1) {
			document.getElementsByTagName('body')[0].className += ' new-post';
		}
		if(window.location.href.indexOf("type=newproject") > -1) {
			document.getElementsByTagName('body')[0].className += ' new-project';
		}
	</script>

<!--
  <div class="thisGrid">
    <div class="thisContainer">
      <div class="thisRow">
        <div class="col blue col-md-1"></div>
        <div class="col blue col-md-1"></div>
        <div class="col blue col-md-1"></div>
        <div class="col blue col-md-1"></div>
        <div class="col blue col-md-1"></div>
        <div class="col blue col-md-1"></div>
        <div class="col blue col-md-1"></div>
        <div class="col blue col-md-1"></div>
        <div class="col blue col-md-1"></div>
        <div class="col blue col-md-1"></div>
        <div class="col blue col-md-1"></div>
        <div class="col blue col-md-1"></div>
      </div>
      <div class="thisRow">
      </div>
    </div>
  </div>
-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <div class="wrap" role="document">

    <main class="main" role="main">
      <?php include roots_template_path(); ?>
    </main><!-- /.main -->
    <?php
      if (roots_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
					<div class="login">
          	<?php include roots_sidebar_path(); ?>
					</div>
        </aside>
    <?php
      endif;
    ?>


  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

  <?php get_template_part('templates/popover'); ?>
  <?php get_template_part('templates/popovergallerie'); ?>

</body>
</html>
