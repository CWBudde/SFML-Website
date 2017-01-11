<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Main Page'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.12 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
$(function() {
  initMenu('',false,false,'search.php','Search');
});
</script>
<div id="main-nav"></div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">SFML Documentation</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><h1><a class="anchor" id="welcome"></a>
Welcome</h1>
<p>Welcome to the official SFML documentation. Here you will find a detailed view of all the SFML <a href="./annotated.php">classes</a> and functions. <br />
 If you are looking for tutorials, you can visit the official website at <a href="http://www.sfml-dev.org/">www.sfml-dev.org</a>.</p>
<h1><a class="anchor" id="example"></a>
Short example</h1>
<p>Here is a short example, to show you how simple it is to use SFML:</p>
<div class="fragment"><div class="line"><span class="preprocessor">#include &lt;SFML/Audio.hpp&gt;</span></div><div class="line"><span class="preprocessor">#include &lt;SFML/Graphics.hpp&gt;</span></div><div class="line"></div><div class="line"><span class="keywordtype">int</span> main()</div><div class="line">{</div><div class="line">    <span class="comment">// Create the main window</span></div><div class="line">    <a class="code" href="classsf_1_1RenderWindow.php">sf::RenderWindow</a> window(<a class="code" href="classsf_1_1VideoMode.php">sf::VideoMode</a>(800, 600), <span class="stringliteral">&quot;SFML window&quot;</span>);</div><div class="line"></div><div class="line">    <span class="comment">// Load a sprite to display</span></div><div class="line">    <a class="code" href="classsf_1_1Texture.php">sf::Texture</a> texture;</div><div class="line">    <span class="keywordflow">if</span> (!texture.<a class="code" href="classsf_1_1Texture.php#a8e1b56eabfe33e2e0e1cb03712c7fcc7">loadFromFile</a>(<span class="stringliteral">&quot;cute_image.jpg&quot;</span>))</div><div class="line">        <span class="keywordflow">return</span> EXIT_FAILURE;</div><div class="line">    <a class="code" href="classsf_1_1Sprite.php">sf::Sprite</a> sprite(texture);</div><div class="line"></div><div class="line">    <span class="comment">// Create a graphical text to display</span></div><div class="line">    <a class="code" href="classsf_1_1Font.php">sf::Font</a> font;</div><div class="line">    <span class="keywordflow">if</span> (!font.<a class="code" href="classsf_1_1Font.php#ab020052ef4e01f6c749a85571c0f3fd1">loadFromFile</a>(<span class="stringliteral">&quot;arial.ttf&quot;</span>))</div><div class="line">        <span class="keywordflow">return</span> EXIT_FAILURE;</div><div class="line">    <a class="code" href="classsf_1_1Text.php">sf::Text</a> text(<span class="stringliteral">&quot;Hello SFML&quot;</span>, font, 50);</div><div class="line"></div><div class="line">    <span class="comment">// Load a music to play</span></div><div class="line">    <a class="code" href="classsf_1_1Music.php">sf::Music</a> music;</div><div class="line">    <span class="keywordflow">if</span> (!music.<a class="code" href="classsf_1_1Music.php#a3edc66e5f5b3f11e84b90eaec9c7d7c0">openFromFile</a>(<span class="stringliteral">&quot;nice_music.ogg&quot;</span>))</div><div class="line">        <span class="keywordflow">return</span> EXIT_FAILURE;</div><div class="line"></div><div class="line">    <span class="comment">// Play the music</span></div><div class="line">    music.<a class="code" href="classsf_1_1SoundStream.php#afdc08b69cab5f243d9324940a85a1144">play</a>();</div><div class="line"></div><div class="line">    <span class="comment">// Start the game loop</span></div><div class="line">    <span class="keywordflow">while</span> (window.<a class="code" href="classsf_1_1Window.php#ae873503db7d48157bb9cbf6129562bce">isOpen</a>())</div><div class="line">    {</div><div class="line">        <span class="comment">// Process events</span></div><div class="line">        <a class="code" href="classsf_1_1Event.php">sf::Event</a> event;</div><div class="line">        <span class="keywordflow">while</span> (window.<a class="code" href="classsf_1_1Window.php#a338e996585faf82e93069858e3b531b7">pollEvent</a>(event))</div><div class="line">        {</div><div class="line">            <span class="comment">// Close window: exit</span></div><div class="line">            <span class="keywordflow">if</span> (event.<a class="code" href="classsf_1_1Event.php#adf2f8044f713fd9d6019077b0d1ffe0a">type</a> == <a class="code" href="classsf_1_1Event.php#af41fa9ed45c02449030699f671331d4aa4f718a7f43b0f2d46be222fe23198d9e">sf::Event::Closed</a>)</div><div class="line">                window.<a class="code" href="classsf_1_1Window.php#a99d1e030387b0c26f5995670504fe7b5">close</a>();</div><div class="line">        }</div><div class="line"></div><div class="line">        <span class="comment">// Clear screen</span></div><div class="line">        window.<a class="code" href="classsf_1_1RenderTarget.php#a6bb6f0ba348f2b1e2f46114aeaf60f26">clear</a>();</div><div class="line"></div><div class="line">        <span class="comment">// Draw the sprite</span></div><div class="line">        window.<a class="code" href="classsf_1_1RenderTarget.php#a12417a3bcc245c41d957b29583556f39">draw</a>(sprite);</div><div class="line"></div><div class="line">        <span class="comment">// Draw the string</span></div><div class="line">        window.<a class="code" href="classsf_1_1RenderTarget.php#a12417a3bcc245c41d957b29583556f39">draw</a>(text);</div><div class="line"></div><div class="line">        <span class="comment">// Update the window</span></div><div class="line">        window.<a class="code" href="classsf_1_1Window.php#adabf839cb103ac96cfc82f781638772a">display</a>();</div><div class="line">    }</div><div class="line"></div><div class="line">    <span class="keywordflow">return</span> EXIT_SUCCESS;</div><div class="line">}</div></div><!-- fragment --> </div></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>