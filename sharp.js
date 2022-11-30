const sharp = require('sharp');
const fs = require('fs');
const path = require('path');

const target = path.resolve(__dirname, 'src/public/images/heros');
const destination = path.resolve(__dirname, 'dist/images/heros');
const targetUser = path.resolve(__dirname, 'src/public/user');
const destinationUser = path.resolve(__dirname, 'dist/user');

if (!fs.existsSync(destination)) {
  fs.mkdirSync(destination);
}

fs.readdirSync(target)
  .forEach((image) => {
    // mengubah ukuran gambar dengan lebar 800px, dengan prefix -large.jpg
    sharp(`${target}/${image}`)
      .resize(800)
      .toFile(path.resolve(
        __dirname,
        `${destination}/${image.split('.').slice(0, -1).join('.')}-large.jpg`,
      ));

    // mengubah ukuran gambar dengan lebar 480px, dengan prefix -small.jpg
    sharp(`${target}/${image}`)
      .resize(480)
      .toFile(path.resolve(
        __dirname,
        `${destination}/${image.split('.').slice(0, -1).join('.')}-small.jpg`,
      ));
  });

if (!fs.existsSync(destinationUser)) {
  fs.mkdirSync(destinationUser);
}

fs.readdirSync(targetUser)
  .forEach((image) => {
    // mengubah ukuran gambar dengan lebar 800px, dengan prefix -large.jpg
    sharp(`${targetUser}/${image}`)
      .resize(800)
      .toFile(path.resolve(
        __dirname,
        `${destinationUser}/${image.split('.').slice(0, -1).join('.')}-large.png`,
      ));

    // mengubah ukuran gambar dengan lebar 480px, dengan prefix -small.jpg
    sharp(`${targetUser}/${image}`)
      .resize(480)
      .toFile(path.resolve(
        __dirname,
        `${destinationUser}/${image.split('.').slice(0, -1).join('.')}-small.png`,
      ));
  });
