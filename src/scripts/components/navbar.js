class NavBar extends HTMLElement {
  connectedCallback() {
    this.render();
  }

  render() {
    this.innerHTML = `
      <header class="header">
   <nav class="menu" id="navbar">
    <div class="brand">
     <img src="./Logo.png" alt="Logo" />
     <h1>YumKit</h1>
    </div>
    <!-- Burger Nav / Toggle -->
    <button id="hamburger" class="menu-toggle">
      <input type="checkbox"/>
      <span></span>
      <span></span>
      <span></span>
    </button>
    <ul class="nav_list">
     <li class="nav_item"><a href="/" class="nav-link">Home</a></li>
     <li class="nav_item"><a href="#/like" class="nav-link">Favorite</a></li>
     <li class="nav_item"><a href="#/list" class="nav-link">Product</a></li>
     <li class="nav_item"><a href="#Gallery" class="nav-link">Gallery</a></li>
     <li class="nav_item"><a href="https://github.com/ar-kun" target="_blank" class="nav-link">About Us</a></li>
    </ul>
   </nav>
  </header>
    `;
  }
}

customElements.define('nav-bar', NavBar);
