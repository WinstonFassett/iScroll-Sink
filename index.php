<?php include("assets/inc/header.shtml"); ?>
<div id="home-wrapper" class="page current">
    <div class="scroll-content">
        <ul>
            <li><a href="#parameters" class="pageLink">Parameters</a></li>
            <li><a href="#zoom" class="pageLink">Pinch / Zoom</a></li>
            <li><a href="#custom-scroll" class="pageLink">Custom Scrollbars</a></li>
            <li><a href="#refresh" class="pageLink">Refresh</a></li>
            <li><a href="#snap" class="pageLink">Snap</a></li>
        </ul>
    </div>
</div>
<div id="parameters" class="page">
    <div class="scroll-content">
        <ul>
            <li>
                <a href="#hscroll" class="pageLink">hScroll &amp; vScroll</a>
            </li>
            <li>
                <a href="#fixedScrollbar" class="pageLink">fixedScrollbar</a>
            </li>
            <li>
                <a href="#fadeScrollbar" class="pageLink">fadeScrollbar</a>
            </li>
            <li>
                <a href="#hideScrollbar" class="pageLink">hideScrollbar</a>
            </li>
            <li>
                <a href="#bounce" class="pageLink">bounce</a>
            </li>
            <li>
                <a href="#momentum" class="pageLink">momentum</a>
            </li>
            <li>
                <a href="#lockDirection" class="pageLink">lockDirection</a>
            </li>
            <li>
                <a href="#home-wrapper" class="pageLink">HOME</a>
            </li>
        </ul>
    </div>
</div>


<div id="hscroll" class="page">
    <div class="page-content">
        <h2>hscroll &amp; vScroll</h2>
        <p><code>hScroll</code> and <code>vScroll</code> control the horizontal and vertical scrolling (if you hadn't guessed) and by setting either one to <code>false</code>, you can disable them altogether. By default these are both set to <code>true</code>, so if your content exeeds the wrapper, the user will have the ability to scroll to it.</p> 
<p><code>hScrollbar</code> and <code>vScrollbar</code> these are the options to show and hide the black scrollbar that fades-in and fades-out when scrolling.</p>

    <a href="#parameters" class="pageLink">back</a>
    </div>
</div>

<div id="fixedScrollbar" class="page">
    <div class="page-content">
        <h2>fixedScrollbar</h2>
        <p><code>fixedScrollbar</code> is the control for how the scrollbar acts when it reaches the end of your scrollable container. By default it is set to <code>false</code> so that when it reaches the end, it shrinks down. When set to <code>true</code> it remains a fixed height.</p>
    <a href="#parameters" class="pageLink">back</a>
    </div>
</div>
<div id="fadeScrollbar" class="page">
    <div class="page-content">
        <h2>fadeScrollbar</h2>
        <p><code>fadeScrollbar</code> is set to <code>true</code> by default, but if you would prefer to have the scrollbar just dissapear rather than fade, set this to <code>false</code>.</p>
    <a href="#parameters" class="pageLink">back</a>
    </div>
</div>
<div id="hideScrollbar" class="page">
    <div class="page-content">
        <h2>hideScrollbar</h2>
        <p><code>hideScrollbar</code> is set to <code>true</code> by default, but if you want the scrollbar to remian on the page, set this to <code>false</code>. The scrollbar will now not fade out when the user stop scrolling. </p>
    <a href="#parameters" class="pageLink">back</a>
    </div>
</div>
<div id="bounce" class="page">
    <div class="page-content">
        <h2>bounce</h2>
        <p><code>bounce</code> is to set the 'elastic banding' when the user scrolls beyond the content. By default this is set to <code>true</code>. Personally I have found that when using iScroll within a big application, setting this to false has saved s lot of loading time.</p>
    <a href="#parameters" class="pageLink">back</a>
    </div>
</div>
<div id="momentum" class="page">
    <div class="page-content">
        <h2>momentum</h2>
        <p><code>momentum</code> controls the inertia of the scrolling. By default it is set to <code>true</code>, but if you want a more controlled scrolling area, set this to <code>false</code>. This is another one of those options that you might want to turn off in big applications as it seems to eat up resources.</p>
    <a href="#parameters" class="pageLink">back</a>
    </div>
</div>
<div id="lockDirection" class="page">
    <div class="page-content">
        <h2>lockDirection</h2>
        <p><code>lockDirection</code> locks down the scrolling to one axis only. So you can either scroll up and down or left and right at any one time. This is set to <code>true</code> by default, but if you want to allow the user to scroll in either direction at anytime, set it to <code>false</code>.</p>
    <a href="#parameters" class="pageLink">back</a>
    </div>
</div>


<div id="zoom" class="page">
    <div class="page-content">
        <h2>Zoom</h2>
        <p>The Pinch and Zoom allows you to have scalable content within our app, but keeping the fixed headers and footers. It is passed thorugh like any of the other parameters (as an object) and you will need to create a new instance of iScroll for the zoomable area.</p>
        <p>You can control the maximum zoom by passing through an additional option of <code>zoomMax</code>. By Default this is set to 4.</p>
    <a href="#home-wrapper" class="pageLink">back</a>
    </div>
</div>

<div id="custom-scroll" class="page">
    <div class="scroll-content">
        <ul>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>
                <a href="#home-wrapper" class="pageLink">HOME</a>
            </li>
        </ul>
    </div>
</div>
<div id="refresh" class="page">
    <div class="scroll-content">
        <div id="pullDown">
            <span class="pullDownLabel">Pull down to refresh...</span>
        </div>
        <ul id="refreshList">
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>Fake Content for Scroll</li>
            <li>
                <a href="#home-wrapper" class="pageLink">HOME</a>
            </li>
        </ul>
    </div>
</div>

<div id="snap" class="page">
    <div class="scroll-content">
        <ul id="thelist">
            <li><p>Content for the Carousel</p></li>
            <li><p>Secondary Content</p></li>
            <li><p>Tertiary Content</p></li>
            <li><a href="#home-wrapper" class="pageLink">Click to go Home</a></li>
        </ul>
    </div>
</div>




<?php include("assets/inc/footer.shtml"); ?>