const theme = {
  breakpoints: {
    sm: '28em',
    md: '48em',
    lg: '68em',
  },
  colors: {
    primary: '#2C324E',
    secondary: '#CE8B48',
    light: '#ffffff',
    dark: '#252525',
  },
  fonts: {
    base: 'Mukta, sans-serif, arial',
    alt: 'Petit Formal Script, cursive',
  },
  display: {
    block: "block",
    none: "none",
    inline: "inline-block"
  },
  sizeScale: {
    200: 'var(--step--2)',
    300: 'var(--step--1)',
    400: 'var(--step-0)',
    500: 'var(--step-1)',
    600: 'var(--step-2)',
    700: 'var(--step-3)',
    800: 'var(--step-4)',
    900: 'var(--step-5)',
    1000: 'var(--step-6)',
    1100: 'var(--step-7)',
    1200: 'var(--step-8)',
    1300: 'var(--step-9)',
    1400: 'var(--step-10)',
  },
  textScale: {
    200: 'var(--step--2)',
    300: 'var(--step--1)',
    400: 'var(--step-0)',
    500: 'var(--step-1)',
    600: 'var(--step-2)',
    700: 'var(--step-3)',
    800: 'var(--step-4)',
    900: 'var(--step-5)',
    1000: 'var(--step-6)',
    1100: 'var(--step-7)',
    1200: 'var(--step-8)',
    1300: 'var(--step-9)',
    1400: 'var(--step-10)',
  },
};

module.exports = {
  theme: theme,
  tokens: {
    bg: {
      items: theme.colors,
      property: 'background',
    },
    color: {
      items: theme.colors,
      property: 'color',
      variable: true,
    },
    font: {
      items: theme.fonts,
      property: 'font-family',
      variable: true,
    },
    'gap-top': {
      items: theme.sizeScale,
      property: 'margin-top',
      responsive: true,
    },
    'gap-bottom': {
      items: theme.sizeScale,
      property: 'margin-bottom',
      responsive: true,
    },
    leading: {
      items: {
        'extra-tight': '1.067',
        tight: '1.2',
        mid: '1.5',
        loose: '1.7',
      },
      property: 'line-height',
    },
    measure: {
      items: {
        long: '75ch',
        short: '60ch',
        compact: '40ch',
      },
      property: 'max-width',
    },
    'pad-top': {
      items: theme.sizeScale,
      property: 'padding-top',
      responsive: true,
    },
    'pad-bottom': {
      items: theme.sizeScale,
      property: 'padding-bottom',
      responsive: true,
    },
    size: {
      items: theme.sizeScale,
      variable: true,
    },
    text: {
      items: theme.textScale,
      responsive: true,
      property: 'font-size',
      variable: true,
    },
    display: {
      items: theme.display,
      responsive: true,
      property: 'display',
      variable: true,
    },
    weight: {
      items: {
        light: '300',
        regular: '400',
        medium: '600',
        bold: '700',
      },
      property: 'font-weight',
      variable: true,
    },
  },
};
