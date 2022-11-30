import RestaurantDbSource from '../../data/restaurant-source';
import { createRestaurantItemTemplate } from '../templates/template-creator';

const List = {
  async render() {
    return `
      <section class="hero_element" id="hero">
    <article>
     <h2>"Peringatan! Produk ini dapat menyebabkan Anda susah berhenti mengunyah"</h2>
     <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error, unde praesentium. Iusto maxime eveniet autem rem, quaerat voluptate. Ea
      pariatur molestiae similique aliquid placeat necessitatibus quibusdam cupiditate magni in quae magnam, ipsa, nam dicta vero culpa aspernatur at
      eius tempora sapiente eos totam optio reprehenderit consequatur quis? Fuga, molestiae ducimus?
     </p>
     <a href="#">Read More</a>
    </article>
   </section>
   <section class="product" id="Product">
    <h3>Product</h3>
    <div class="product_list" id="product_list"></div>
   </section>
   <section class="gallery" id="Gallery">
    <h3>Gallery</h3>
    <div class="galery_list">
     <a href="">
     <picture>
        <source media="(max-width: 600px)" data-srcset="./images/heros/hero-image_2-small.jpg">
        <img class="lazyload" data-src="./images/heros/hero-image_2-large.jpg" width="450" alt="Gallery Pertama" title="Dark Themed Gathering" />
      </picture>
     </a>
     <a href="">
     <picture>
        <source media="(max-width: 600px)" data-srcset="./images/heros/hero-image_3-small.jpg">
        <img class="lazyload" data-src="./images/heros/hero-image_3-large.jpg" width="450" alt="Gallery Pertama" title="Dark Themed Gathering" />
      </picture>
     </a>
     <a href="">
     <picture>
        <source media="(max-width: 600px)" data-srcset="./images/heros/hero-image_4-small.jpg">
        <img class="lazyload" data-src="./images/heros/hero-image_4-large.jpg" width="450" alt="Gallery Pertama" title="Dark Themed Gathering" />
      </picture>
     </a>
    </div>
   </section>
    `;
  },

  async afterRender() {
    const restaurants = await RestaurantDbSource.listRestaurant();
    const restaurantsContainer = document.querySelector('#product_list');
    restaurants.forEach((restaurant) => {
      restaurantsContainer.innerHTML += createRestaurantItemTemplate(restaurant);
    });
  },
};

export default List;
