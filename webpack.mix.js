const { mix } = require("laravel-mix");
require("laravel-mix-merge-manifest");

var publicPath = "../../../public/themes/velocity/assets";

if (mix.inProduction()) {
    publicPath = 'publishable/assets';
}

publicPath = 'publishable/assets';

mix.setPublicPath(publicPath).mergeManifest();
mix.disableNotifications();

mix
    .copy(__dirname + "/src/Resources/assets/images", publicPath + "/images")

    .sass(
        __dirname + '/src/Resources/assets/sass/admin.scss',
        __dirname + '/' + publicPath + '/css/reward-admin.css'
    )
    .sass(
        __dirname + '/src/Resources/assets/sass/default.scss',
        __dirname + '/' + publicPath + '/css/rewards.css'
    )

    .options({
        processCssUrls: false
    });

if (mix.inProduction()) {
    mix.version();
}
