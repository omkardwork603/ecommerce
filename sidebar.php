<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <style type="text/css">
      

.section__container {
  max-width: var(--max-width);
  margin: auto;
  padding: 5rem 1rem;
  max-width: 1200px;
}

.section__header {
  font-size: 3rem;
  font-weight: 500;
  font-family: var(--header-font-1);
  color: var(--primary-color);
  text-align: center;
  line-height: 3.75rem;
  text-shadow: 2px 2px var(--secondary-color);
}

.section__description {
  font-weight: 500;
  color: var(--text-dark);
  line-height: 1.75rem;
}

.btn {
  padding: 1rem 1.5rem;
  outline: none;
  border: none;
  font-size: 1rem;
  color: var(--white);
  background-color: var(--tertiary-color);
  transition: 0.3s;
  cursor: pointer;
}

.btn:hover {
  background-color: var(--primary-color);
}

img {
  display: flex;
  width: 100%;
}

a {
  text-decoration: none;
  transition: 0.3s;
}

html,
body {
  scroll-behavior: smooth;
}


.banner__container {
  display: grid;
  gap: 1rem;
  grid-auto-rows: 200px;
}

.banner__card {
  padding: 10rem;
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  border-radius: 1rem;
}

.banner__card:nth-child(1) {
  background-image: url("assets/banner-24.jpg");
}

.banner__card:nth-child(2) {
  background-image: url("assets/fashion-images-men.jpg");
}

.banner__card:nth-child(3) {
  background-image: url("assets/favourite-1.jpg");
}



.banner__card p {
  margin-bottom: 0.5rem;
  font-size: 1.5rem;
  font-weight: 500;
  color: var(--white);
}

.banner__card h4 {
  font-size: 2rem;
  font-weight: 600;
  color: var(--white);
}


@media (width > 540px) {
  .banner__container {
    grid-template-columns: repeat(2, 1fr);
  }

  .banner__card:nth-child(1) {
    grid-area: 1/1/2/3;
  }


  .order__grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (width > 768px) {
  nav {
    position: static;
    padding: 2rem 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1rem;
  }

  

  .banner__card {
    padding: 1.5rem;
  }

  .banner__card:nth-child(1) {
    grid-area: 1/1/3/2;
  }

  .order__grid {
    grid-template-columns: repeat(3, 1fr);
  }

@media (width > 1024px) {
  .order__grid {
    gap: 2rem;
  }
}

    </style>
    <title>Web Design Mastery | Burger House</title>
  </head>
  <body>


    <section class="section__container banner__container" id="special">
      <div class="banner__card">
        <h4>New IMAC</h4>
      </div>
      <div class="banner__card">
        <h4>Fashion dress</h4>
      </div>
      <div class="banner__card">
        <p>TRY IT OUT TODAY</p>
        <h4>New dress for <br> women</h4>
      </div>
    </section>





    <script src="https://unpkg.com/scrollreveal"></script>
  </body>
</html>
