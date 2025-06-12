<ul class='contacts__network'>
  <li>
    <a href="#" target="_blank" rel="noopener noreferrer">
      <svg class="svg-item svg-item--vk" viewBox="0 0 20 13">
        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-vk"></use>
      </svg>
    </a>
  </li>
  <li>
    <a href="#" target="_blank" rel="noopener noreferrer">
      <svg class="svg-item svg-item--rutube" viewBox="0 0 20 18">
        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-rutube"></use>
      </svg>
    </a>
  </li>
  <li>
    <a href="#" target="_blank" rel="noopener noreferrer">
      <svg class="svg-item svg-item--youtube" viewBox="0 0 20 17">
        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-youtube"></use>
      </svg>
    </a>
  </li>
  <li>
    <a href="#" target="_blank" rel="noopener noreferrer">
      <svg class="svg-item svg-item--telegram" viewBox="0 0 18 15">
        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-telegram"></use>
      </svg>
    </a>
  </li>
  <li>
    <a href="#" target="_blank" rel="noopener noreferrer">
      <svg class="svg-item svg-item--whatsapp" viewBox="0 0 21 21">
        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-whatsapp"></use>
      </svg>
    </a>
  </li>
</ul>

<style>
  .contacts__network li {
    width: 35px;
    height: 35px;
    display: flex;
    border-radius: 6px;
    align-items: center;
    justify-content: center;
    background-color: var(--white);
  }

  .contacts__network.contacts__network--aside li {
    background-color: var(--black);
  }

  .contacts__network li a {
    display: flex;
  }


  .contacts__network .svg-item {
    width: 100%;
    height: 100%;
    padding: 9px;
  }


  .contacts__network {
    display: flex;
    flex-direction: row;
    gap: 10px;
  }

  .contacts__network.contacts__network--aside {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto;
  

  }

  .contacts__network li svg {
    width: auto;
    height: auto;
    color: var(--dark-blue);
  }

  .contacts__network.contacts__network--aside li svg {
    color: var(--white);
  }

  .contacts__network li:hover svg {
    color: var(--white);
  }

  .contacts__network.contacts__network--aside li:hover svg {

    color: var(--black);

  }

  .contacts__network li:hover {
    border: 1px solid var(--white);
    background-color: rgba(255, 255, 255, 0);
  }

  .contacts__network.contacts__network--aside li:hover {
    border: 1px solid var(--black);
    background-color: rgba(255, 255, 255, 0);
  }



  @media (max-width:1280px) {
    .contacts__network {
      gap: 15px;
    }

    .contacts__network.contacts__network--aside {
      gap: 10px;

    }

    .contacts__network li {
      width: 45px;
      height: 45px;
    }
  }

  @media (max-width:1280px) {
    .contacts__network {
      gap: 15px;
    }
  }
</style>