<?php
 

class SponsorMetaBox {
    
    const META_KEY = 'monTheme_sponsor';

    public static function register() {
        add_action('add_meta_boxes', [self::class, 'add'], 10, 2);
        add_action('save_post', [self::class, 'save']);
    }

    public static function add($postType, $post) {

        if($postType === 'post' && current_user_can('publish_posts', $post)) {
            add_meta_box(self::META_KEY, 'sponsor', [self::class, 'render'], 'post', 'side');
        }

    }

    public static function render($post) {
        $value = get_post_meta($post->ID, self::META_KEY , true);
        ?>
            <label for="monTheme_sponsing">Sponsor</label>
            <input type="checkbox" id="<?= self::META_KEY ?>" name="<?= self::META_KEY ?>" value="1" <?php checked($value, 1); ?>>
            <input type="hidden" name="monTheme_sponsor_hidden" value="0"> 
    
            <?php wp_nonce_field('monTheme_save_sponsor_action', 'monTheme_sponsor_nonce'); //ajout du nonce?>
        <?php
    }

    public static function save($post_id) {

        //verification si le nonce est présent
        if (!isset($_POST['monTheme_sponsor_nonce']) || 
            !wp_verify_nonce($_POST['monTheme_sponsor_nonce'], 'monTheme_save_sponsor_action')) {
            return;
        }

        //verification si l'utilisateur a le droit de modifier le post
        if (!current_user_can('publish_posts', $post_id)) {
            return;
        }

        //verification si le post est un brouillon
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }

        //recuperation de la valeur du champ
        $sponsor_value = isset($_POST[ self::META_KEY]) ? 1 : 0;

        //enregistrement de la valeur dans la base de données
        update_post_meta($post_id, self::META_KEY, $sponsor_value);    
    }

}

?>