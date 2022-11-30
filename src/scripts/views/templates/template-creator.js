import CONFIG from '../../globals/config';

const createRestaurantDetailTemplate = (restaurant) => `
  <section class="product" id="Product">
    <div class="product_detail">
     <div class="spek_detail">
      <picture>
        <source media="(max-width: 600px)" class="lazyload" data-srcset="${CONFIG.SMALL_BASE_IMAGE_URL + restaurant.pictureId}">
        <img class="lazyload" data-src="${CONFIG.BASE_IMAGE_URL + restaurant.pictureId}" alt="${restaurant.name}" />
      </picture>
      <!-- <p>rating</p> -->
      <aside>
       <a href="#"><p>${restaurant.name}</p></a>
       <p>${restaurant.city} - ${restaurant.address}</p>
       <p>${restaurant.categories.map((category) => `
            <span>${category.name}</span>
          `).join(' - ')}</p>
       <p>
        ${restaurant.description}
       </p>
      </aside>
     </div>
     <div class="menu_review">
      <div class="food">
       <h4>Food</h4>
       <div class="food_list">
        ${restaurant.menus.foods.map((food) => `
        <div class="food_item">
          <picture>
            <source media="(max-width: 600px)" class="lazyload" data-srcset="https://source.unsplash.com/400x400?Paket rosemary">
            <img class="lazyload" data-src="https://source.unsplash.com/800x800?Paket rosemary" alt="" />
          </picture>
          <p>${food.name}</p>
        </div>
        `).join('')}
       </div>
      </div>
      <div class="drink">
       <h4>Drink</h4>
       <div class="drink_list">
       ${restaurant.menus.drinks.map((drink) => `
        <div class="drink_item">
         <picture>
            <source media="(max-width: 600px)" class="lazyload" data-srcset="https://source.unsplash.com/400x400?Paket rosemary">
            <img class="lazyload" data-src="https://source.unsplash.com/800x800?Drink" alt="" />
          </picture>
          <p>${drink.name}</p>
        </div>
        `).join('')}
       </div>
      </div>
      <div class="review">
       <h4>Review</h4>
       <div class="list_review">
       ${restaurant.customerReviews.map((review) => `
        <div class="review_item">
        <picture>
          <source media="(max-width: 600px)" class="lazyload" data-srcset="user/slice1-small.png">
          <img class="lazyload" data-src="user/slice1-large.png" alt="User Profile" />
        </picture>
         <p>${review.name}</p>
         <p>${review.date}</p>
         <p>"${review.review}"</p>
        </div>
        `).join('')}
       </div>
      </div>
     </div>
    </div>
    <div class="form_review">
     <form action="">
      <h4>Add Your Review</h4>
      <div class="input_contant">
       <input type="text" id="name" class="name" placeholder="Enter Your Name" required />
       <label for="name" class="label_ame">Name</label>
      </div>
      <div class="input_contant">
       <textarea id="review" class="review" placeholder="Enter Your review" required cols="30" rows="10"></textarea>
       <label for="review" class="label_ame">Review</label>
      </div>
      <button id="submit_review" type="submit" class="button">Add Review</button>
     </form>
    </div>
    <div id="likeButtonContainer"></div>
   </section>
`;

const createRestaurantItemTemplate = (restaurant) => `
  <article>
  <div class="product_item">
    <picture>
      <source class="lazyload" media="(max-width: 600px)" data-srcset="${restaurant.pictureId ? CONFIG.SMALL_BASE_IMAGE_URL + restaurant.pictureId : 'https://picsum.photos/id/666/800/450?grayscale'}">
      <img class="lazyload" alt="${restaurant.name}"
      data-src="${restaurant.pictureId ? CONFIG.BASE_IMAGE_URL + restaurant.pictureId : 'https://picsum.photos/id/666/800/450?grayscale'}" />
    </picture>
      <div class="product_content">
       <div class="product_head">
        <p>${restaurant.city}</p>
        <p><span>
         ${restaurant.rating}</span> <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
         ><i class="fa-solid fa-star-half-stroke"></i>
        </p>
       </div>
       <div class="product_desk">
        <h4><a href="/#/detail/${restaurant.id}">${restaurant.name}</a></h4>
        <p>${restaurant.description.slice(0, 75)}...</p>
       </div>
      </div>
     </div>
     </article>
`;

const createLikeButtonTemplate = () => `
  <button aria-label="like this restaurant" id="likeButton" class="like">
    <i class="fa-regular fa-heart" aria-hidden="true"></i>
  </button>
`;

const createLikedButtonTemplate = () => `
  <button aria-label="unlike this restaurant" id="likeButton" class="like">
    <i class="fa-solid fa-heart" aria-hidden="true"></i>
  </button>
`;

export {
  createRestaurantItemTemplate,
  createRestaurantDetailTemplate,
  createLikeButtonTemplate,
  createLikedButtonTemplate,
};
