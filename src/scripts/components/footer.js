class Footer extends HTMLElement {
  connectedCallback() {
    this.render();
  }

  render() {
    this.innerHTML = `
      <footer>
   <div class="foot_desk">
    <h5>Yummy Kitchen</h5>
    <p>
     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente quod consequuntur accusantium, culpa rem modi minus quam, aspernatur, nostrum
     excepturi aut iure dolores exercitationem eos!
    </p>
   </div>
   <div class="foot_contact">
    <h5>Contact Us</h5>
    <p><span>Address : </span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
    <p><span>Number Phone : </span>+763 372 5873</p>
    <p><span>Email : </span>yumkit@gmail.com</p>
   </div>
   <p class="copy">Copyright &copy; 2022 - YumKit <a href="https://github.com/ar-kun">ar-kun</a></p>
  </footer>
    `;
  }
}

customElements.define('footer-custom', Footer);
