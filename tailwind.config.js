const colors = require("tailwindcss/colors");
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            amber: colors.amber,
            emerald: colors.emerald,
            orange: colors.orange,
        },
        variants: {
            textColor: ["responsive", "hover", "focus", "group-hover"],
        },
        extend: {},
    },
    plugins: [require("@tailwindcss/forms")],
};
