const assert = require('assert');

Feature('Liking Movies');

Before(({ I }) => {
  I.amOnPage('/#/like');
});

Scenario('showing empty liked restaurant', ({ I }) => {
  I.seeElement('#product_list');
  I.see('Tidak Ada Daftar Restaurant Yang Tersedia!', '.product_like');
});

Scenario('liking one movie', async ({ I }) => {
  I.seeElement('#product_list');

  I.see('Tidak Ada Daftar Restaurant Yang Tersedia!', '.product_like');

  I.amOnPage('/');

  I.seeElement('.product_desk a');

  const firstFilm = locate('.product_desk a').first();
  const firstFilmTitle = await I.grabTextFrom(firstFilm);
  I.click(firstFilm);

  I.seeElement('#likeButton');
  I.click('#likeButton');

  I.amOnPage('/#/like');
  I.seeElement('.product_item');
  const likedFilmTitle = await I.grabTextFrom('.product_desk a');

  assert.strictEqual(firstFilmTitle, likedFilmTitle);
});

Scenario('unliking one restaurant', async ({ I }) => {
  I.seeElement('#product_list');

  I.see('Tidak Ada Daftar Restaurant Yang Tersedia!', '.product_like');

  I.amOnPage('/');

  I.seeElement('.product_desk a');

  const firstFilm = locate('.product_desk a').first();
  const firstFilmTitle = await I.grabTextFrom(firstFilm);
  I.click(firstFilm);

  I.seeElement('#likeButton');
  I.click('#likeButton');

  I.amOnPage('/#/like');
  I.seeElement('.product_item');
  const likedFilmTitle = await I.grabTextFrom('.product_desk a');

  assert.strictEqual(firstFilmTitle, likedFilmTitle);

  I.click('.product_desk a');
  I.seeElement('#likeButton');
  I.click('#likeButton');

  I.amOnPage('/#/like');
  I.seeElement('#product_list');

  I.see('Tidak Ada Daftar Restaurant Yang Tersedia!', '.product_like');
});
