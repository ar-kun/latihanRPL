const DrawerInitiator = {
  init({ menuToggle, drawer }) {
    menuToggle.addEventListener('click', (event) => {
      this._toggleDrawer(event, drawer);
    });
  },

  _toggleDrawer(event, drawer) {
    event.stopPropagation();
    drawer.classList.toggle('slide');
  },

};

export default DrawerInitiator;
