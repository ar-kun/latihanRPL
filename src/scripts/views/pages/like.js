import FavoriteRestaurantIdb from '../../data/favorite-restaurant-idb';
import { createRestaurantItemTemplate } from '../templates/template-creator';

const Like = {
  async render() {
    return `
      <div class="content">
        <section class="product" id="Product">
          <h3 class="like_heading">Your Like Restaurant</h3>
          <div class="product_list product_like" id="product_list"></div>
        </section>
      </div>
    `;
  },

  async afterRender() {
    const restaurants = await FavoriteRestaurantIdb.getAllRestaurants();
    const restaurantsContainer = document.querySelector('#product_list');

    if (restaurants.length === 0) {
      restaurantsContainer.innerHTML = `
        Tidak Ada Daftar Restaurant Yang Tersedia!
      `;
    }

    restaurants.forEach((restaurant) => {
      restaurantsContainer.innerHTML += createRestaurantItemTemplate(restaurant);
    });
  },
};

export default Like;
