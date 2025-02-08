<form class="d-flex" action="<?= esc_url(home_url('/') )?>" method="get">
    <input class="form-control me-2" type="search" name="s" placeholder="Recherche" value="<?php get_search_query() ?>" aria-label="Search">
    <button class="btn btn-outline-success bg-white" type="submit">send</button>
</form>