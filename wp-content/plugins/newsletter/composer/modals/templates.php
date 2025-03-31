<?php
$emails_module = NewsletterEmails::instance();
$user_preset_list = $emails_module->get_emails(NewsletterEmails::PRESET_EMAIL_TYPE);
$templates = NewsletterComposer::instance()->get_templates();
?>
<div id="templates-modal" aria-hidden="true" style="display: none; max-width: 80%;">
    <div class='tnpc-preset-container'>

        <?php if ($user_preset_list) { ?>

            <h3>Custom templates</h3>

            <div class="tnpc-preset-block">

                <?php
                foreach ($user_preset_list as $user_preset) {

                    $default_icon_url = plugins_url('newsletter') . "/emails/presets/default-icon.png?ver=2";
                    $preset_name = $user_preset->subject;

                    // esc_js() assumes the string will be in single quote (arghhh!!!)
                    $onclick_load = 'NewsletterComposer.load_template(' . ((int) $user_preset->id) . ', event)';
                    ?>

                    <div class='tnpc-preset' onclick='<?php echo esc_attr($onclick_load); ?>'>
                        <img src='<?php echo esc_attr($default_icon_url); ?>' title='<?php echo esc_attr($preset_name); ?>' alt='<?php echo esc_attr($preset_name); ?>'>
                        <div class='tnpc-preset-label'><?php echo esc_html($user_preset->subject); ?></div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

        <h3>Confirmation and welcome templates</h3>

        <div class="tnpc-preset-block">

            <?php
            foreach ($templates as $template) {
                $type = $template->type ?? '';
                if ($type !== 'confirmation' && $type !== 'welcome') {
                    continue;
                }
                $onclick_load = 'NewsletterComposer.load_template(\'' . sanitize_key($template->id) . '\', event)';
                ?>

                <div class='tnpc-preset' onclick='<?php echo esc_attr($onclick_load); ?>'>
                    <img src='<?php echo esc_attr($template->icon); ?>' title='<?php echo esc_attr($template->name); ?>' alt='<?php echo esc_attr($template->name); ?>'>
                    <div class='tnpc-preset-label'><?php echo esc_html($template->name); ?></div>
                </div>

            <?php } ?>

        </div>


        <h3>Standard templates</h3>

        <div class="tnpc-preset-block">

            <?php
            foreach ($templates as $template) {
                $type = $template->type ?? '';
                if ($type === 'confirmation' || $type === 'welcome') {
                    continue;
                }
                $onclick_load = 'NewsletterComposer.load_template(\'' . sanitize_key($template->id) . '\', event)';
                ?>

                <div class='tnpc-preset' onclick='<?php echo esc_attr($onclick_load); ?>'>
                    <img src='<?php echo esc_attr($template->icon); ?>' title='<?php echo esc_attr($template->name); ?>' alt='<?php echo esc_attr($template->name); ?>'>
                    <div class='tnpc-preset-label'><?php echo esc_html($template->name); ?></div>
                </div>

            <?php } ?>

        </div>



    </div>
</div>
