module.exports = {
  extends: "stylelint-config-standard",
  rules: {
    "no-empty-source": null,
    "string-quotes": "double",
    "declaration-colon-newline-after": null,
    "declaration-block-trailing-semicolon": null,
    "no-eol-whitespace": null,
    "value-list-comma-newline-after": null,
    "at-rule-no-unknown": [
      true,
      {
        ignoreAtRules: [
          "extend",
          "at-root",
          "debug",
          "warn",
          "error",
          "if",
          "else",
          "for",
          "each",
          "while",
          "mixin",
          "include",
          "content",
          "return",
          "function",
          "tailwind",
          "apply",
          "responsive",
          "variants",
          "screen"
        ]
      }
    ]
  }
};
