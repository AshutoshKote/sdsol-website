<?php
/**
 * Custom meta boxes for the WordPress admin.
 * Gives non-coders clearly labeled fields when editing Services, Case Studies, and Team Members.
 */

/* ─── SERVICE META BOX ───────────────────────────────────────── */
function sdsol_add_service_meta_box() {
    add_meta_box(
        'sdsol_service_details',
        '⚙️ Service Details',
        'sdsol_render_service_meta_box',
        'sdsol_service',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'sdsol_add_service_meta_box' );

function sdsol_render_service_meta_box( $post ) {
    wp_nonce_field( 'sdsol_service_meta', 'sdsol_service_nonce' );
    $tagline      = get_post_meta( $post->ID, 'tagline', true );
    $icon         = get_post_meta( $post->ID, 'icon', true );
    $features     = get_post_meta( $post->ID, 'features', true );
    $technologies = get_post_meta( $post->ID, 'technologies', true );
    $icons        = [ 'server', 'shield', 'git', 'bar-chart', 'cpu', 'compass' ];
    ?>
    <table class="form-table" style="width:100%">
        <tr>
            <th style="width:180px"><label for="sdsol_tagline"><strong>Tagline</strong><br><small>Short phrase under the title</small></label></th>
            <td><input type="text" id="sdsol_tagline" name="sdsol_tagline" value="<?php echo esc_attr( $tagline ); ?>" style="width:100%" placeholder="e.g. Purpose-built AI for healthcare" /></td>
        </tr>
        <tr>
            <th><label for="sdsol_icon"><strong>Icon</strong><br><small>Displayed next to the service</small></label></th>
            <td>
                <select id="sdsol_icon" name="sdsol_icon">
                    <?php foreach ( $icons as $i ) : ?>
                        <option value="<?php echo esc_attr( $i ); ?>" <?php selected( $icon, $i ); ?>><?php echo esc_html( $i ); ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="sdsol_features"><strong>Key Features</strong><br><small>One bullet point per line</small></label></th>
            <td><textarea id="sdsol_features" name="sdsol_features" rows="6" style="width:100%" placeholder="Cloud data lakehouse architecture&#10;Data warehouse design and migration&#10;Real-time streaming infrastructure"><?php echo esc_textarea( $features ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="sdsol_technologies"><strong>Technologies</strong><br><small>One technology per line</small></label></th>
            <td><textarea id="sdsol_technologies" name="sdsol_technologies" rows="4" style="width:100%" placeholder="Microsoft Azure&#10;Snowflake&#10;Databricks"><?php echo esc_textarea( $technologies ); ?></textarea></td>
        </tr>
    </table>
    <?php
}

function sdsol_save_service_meta( $post_id ) {
    if ( ! isset( $_POST['sdsol_service_nonce'] ) ) return;
    if ( ! wp_verify_nonce( $_POST['sdsol_service_nonce'], 'sdsol_service_meta' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    update_post_meta( $post_id, 'tagline',      sanitize_text_field( $_POST['sdsol_tagline'] ?? '' ) );
    update_post_meta( $post_id, 'icon',         sanitize_text_field( $_POST['sdsol_icon'] ?? 'server' ) );
    update_post_meta( $post_id, 'features',     sanitize_textarea_field( $_POST['sdsol_features'] ?? '' ) );
    update_post_meta( $post_id, 'technologies', sanitize_textarea_field( $_POST['sdsol_technologies'] ?? '' ) );
}
add_action( 'save_post_sdsol_service', 'sdsol_save_service_meta' );

/* ─── CASE STUDY META BOX ────────────────────────────────────── */
function sdsol_add_case_study_meta_box() {
    add_meta_box(
        'sdsol_case_study_details',
        '📊 Case Study Details',
        'sdsol_render_case_study_meta_box',
        'sdsol_case_study',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'sdsol_add_case_study_meta_box' );

function sdsol_render_case_study_meta_box( $post ) {
    wp_nonce_field( 'sdsol_case_study_meta', 'sdsol_case_study_nonce' );
    $metric         = get_post_meta( $post->ID, 'metric', true );
    $category_label = get_post_meta( $post->ID, 'category_label', true );
    ?>
    <table class="form-table" style="width:100%">
        <tr>
            <th style="width:180px"><label for="sdsol_category_label"><strong>Category</strong><br><small>e.g. AI & ML, Data Engineering</small></label></th>
            <td><input type="text" id="sdsol_category_label" name="sdsol_category_label" value="<?php echo esc_attr( $category_label ); ?>" style="width:100%" placeholder="e.g. AI & ML" /></td>
        </tr>
        <tr>
            <th><label for="sdsol_metric"><strong>Key Result / Metric</strong><br><small>The headline outcome</small></label></th>
            <td><input type="text" id="sdsol_metric" name="sdsol_metric" value="<?php echo esc_attr( $metric ); ?>" style="width:100%" placeholder="e.g. 85%+ prediction accuracy" /></td>
        </tr>
    </table>
    <p style="color:#666;margin-top:12px;font-size:13px">
        💡 <strong>Tip:</strong> Use the <em>Excerpt</em> field below for the short summary shown on the Success Stories page. Use the main <em>Content</em> area for the full case study.
    </p>
    <?php
}

function sdsol_save_case_study_meta( $post_id ) {
    if ( ! isset( $_POST['sdsol_case_study_nonce'] ) ) return;
    if ( ! wp_verify_nonce( $_POST['sdsol_case_study_nonce'], 'sdsol_case_study_meta' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    update_post_meta( $post_id, 'metric',         sanitize_text_field( $_POST['sdsol_metric'] ?? '' ) );
    update_post_meta( $post_id, 'category_label', sanitize_text_field( $_POST['sdsol_category_label'] ?? '' ) );
}
add_action( 'save_post_sdsol_case_study', 'sdsol_save_case_study_meta' );

/* ─── TEAM MEMBER META BOX ───────────────────────────────────── */
function sdsol_add_team_meta_box() {
    add_meta_box(
        'sdsol_team_details',
        '👤 Team Member Details',
        'sdsol_render_team_meta_box',
        'sdsol_team_member',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'sdsol_add_team_meta_box' );

function sdsol_render_team_meta_box( $post ) {
    wp_nonce_field( 'sdsol_team_meta', 'sdsol_team_nonce' );
    $job_title  = get_post_meta( $post->ID, 'job_title', true );
    $sort_order = get_post_meta( $post->ID, 'sort_order', true );
    ?>
    <table class="form-table" style="width:100%">
        <tr>
            <th style="width:180px"><label for="sdsol_job_title"><strong>Job Title / Role</strong></label></th>
            <td><input type="text" id="sdsol_job_title" name="sdsol_job_title" value="<?php echo esc_attr( $job_title ); ?>" style="width:100%" placeholder="e.g. Founder & Managing Partner" /></td>
        </tr>
        <tr>
            <th><label for="sdsol_sort_order"><strong>Display Order</strong><br><small>Lower numbers appear first</small></label></th>
            <td><input type="number" id="sdsol_sort_order" name="sdsol_sort_order" value="<?php echo esc_attr( $sort_order ?: 99 ); ?>" style="width:80px" min="1" /></td>
        </tr>
    </table>
    <p style="color:#666;margin-top:12px;font-size:13px">
        💡 <strong>Tips:</strong><br>
        • Use the post <em>Title</em> for the person&apos;s full name<br>
        • Use the main <em>Content</em> area for their bio<br>
        • Set a <em>Featured Image</em> for their photo
    </p>
    <?php
}

function sdsol_save_team_meta( $post_id ) {
    if ( ! isset( $_POST['sdsol_team_nonce'] ) ) return;
    if ( ! wp_verify_nonce( $_POST['sdsol_team_nonce'], 'sdsol_team_meta' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    update_post_meta( $post_id, 'job_title',   sanitize_text_field( $_POST['sdsol_job_title'] ?? '' ) );
    update_post_meta( $post_id, 'sort_order',  absint( $_POST['sdsol_sort_order'] ?? 99 ) );
}
add_action( 'save_post_sdsol_team_member', 'sdsol_save_team_meta' );
