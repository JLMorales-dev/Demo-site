<?php get_header(); ?>
        
        <section id="hero-section" style="background: linear-gradient(to bottom, rgba(0,0,0, .5), rgba(0,0,0, .8)),url('<?php echo get_theme_file_uri('/images/hero-bg.jpg') ?>')">
            <h1>Title goes here</h1>
            <h3>subtitle goes her</h3>
            <a href="#" class="btn">Link Button</a>
        </section>

        <section>
            <h2>some random as inspirational quote</h2>
        </section>

        <section class="two-column">
            <div id="column-w-bg"></div>
            <div>
                <h3>wow this is a h3 heading</h3>
                <p>some random text goes here ok</p>
                <a href="#" class="btn">Link Button</a>

            </div>
        </section>

        <section class="deals">
            <article class="sale-item">
              <h3>Computer Starter Kit</h3>
              <p>This is the best computer money can buy, if you don’t have much money.</p>
              <ul>
                <li>Computer</li>
                <li>Monitor</li>
                <li>Keyboard</li>
                <li>Mouse</li>
              </ul>
              <img src="https://www.w3.org/TR/css-flexbox-1/images/computer.jpg" alt="You get: a white computer with matching peripherals">
              <button>BUY NOW</button>
            </article>
            
            <article class="sale-item">
              <h3>Printer</h3>
              <p>Only capable of printing ASCII art.</p>
              <ul>
                <li>Paper and ink not included.</li>
              </ul>
              <img src="https://www.w3.org/TR/css-flexbox-1/images/printer.png"
                   alt="You get: a dot-matrix printer.">
              <button>BUY NOW</button>
            </article>
          
            <article class="sale-item">
              <h3>Printer 2</h3>
              <p>A la 1989.</p>
              <img src="https://www.w3.org/TR/css-flexbox-1/images/printer.png"
                   alt="You get: a dot-matrix printer.">
              <button>BUY NOW</button>
            </article>
          
          
            <article class="sale-item">
              <h3>Macintosh 8500</h3>
              <p>This is the best computer money can buy, if you don’t have much money. This computer was state of the art in 1995.</p>
              <img src="https://www.w3.org/TR/css-flexbox-1/images/computer.jpg"
                   alt="You get: a white computer with matching peripherals.">
              <button>BUY NOW</button>
            </article>
        </section>

        <section id="grid-section">

            <input type="checkbox" id="pic-1"><label for="pic-1" class="lightbox"><img src="https://i.ytimg.com/vi/r3DfiLmMrkw/maxresdefault.jpg" alt=""></label>
            <input type="checkbox" id="pic-2"><label for="pic-2" class="lightbox"><img src="https://i.ytimg.com/vi/Jv7xrmE7TMA/maxresdefault.jpg" alt=""></label>
            <input type="checkbox" id="pic-3"><label for="pic-3" class="lightbox"><img src="https://i.ytimg.com/vi/FG23mZoMWqk/maxresdefault.jpg" alt=""></label>
            <input type="checkbox" id="pic-4"><label for="pic-4" class="lightbox"><img src="https://i.ytimg.com/vi/qgSGDgl6Q9c/maxresdefault.jpg" alt=""></label>
            <input type="checkbox" id="pic-5"><label for="pic-5" class="lightbox"><img src="https://i.ytimg.com/vi/YFDlZm8iQEQ/maxresdefault.jpg" alt=""></label>
            <input type="checkbox" id="pic-6"><label for="pic-6" class="lightbox"><img src="https://i.ytimg.com/vi/T3o7YMJhfQw/maxresdefault.jpg" alt=""></label>
            <input type="checkbox" id="pic-7"><label for="pic-7" class="lightbox"><img src="https://i.ytimg.com/vi/Py1G4zdlQw4/maxresdefault.jpg" alt=""></label>
            <input type="checkbox" id="pic-8"><label for="pic-8" class="lightbox"><img src="https://i.ytimg.com/vi/gxZ-hoSParw/maxresdefault.jpg" alt=""></label>

            <div class="grid">
            <label for="pic-1" class="grid-item"><img src="https://i.ytimg.com/vi/r3DfiLmMrkw/maxresdefault.jpg" alt=""></label>
            <label for="pic-2" class="grid-item"><img src="https://i.ytimg.com/vi/Jv7xrmE7TMA/maxresdefault.jpg" alt=""></label>
            <label for="pic-3" class="grid-item"><img src="https://i.ytimg.com/vi/FG23mZoMWqk/maxresdefault.jpg" alt=""></label>
            <label for="pic-4" class="grid-item"><img src="https://i.ytimg.com/vi/qgSGDgl6Q9c/maxresdefault.jpg" alt=""></label>
            <label for="pic-5" class="grid-item"><img src="https://i.ytimg.com/vi/YFDlZm8iQEQ/maxresdefault.jpg" alt=""></label>
            <label for="pic-6" class="grid-item"><img src="https://i.ytimg.com/vi/T3o7YMJhfQw/maxresdefault.jpg" alt=""></label>
            <label for="pic-7" class="grid-item"><img src="https://i.ytimg.com/vi/Py1G4zdlQw4/maxresdefault.jpg" alt=""></label>
            <label for="pic-8" class="grid-item"><img src="https://i.ytimg.com/vi/gxZ-hoSParw/maxresdefault.jpg" alt=""></label>
            </div>

         </section>

         <section>
             <input type="checkbox"><label>checkbox</label>
         </section>

     <?php get_footer(); ?>    
    
    
            
    
        
        
