![AfterCoffee Plugins](https://wolfgang.space/assets/github/aftercoffee.png)

# AfterCoffee Plugins
### Current Plugins

- **Google Analytics**
  - Instantly adds Google Analytics tracking to your site
  - **Requires editing meta.json**
    - In `pluginSetting`, create the `googleAnalytics` object.
    - In that object, place your full G-Tag in the `gtag` string, e.g. `G-86GVJBTSR8`
- **Tweet Embed**
  - Turns linked Tweets into full embeds
  - Obeys AfterCoffee dark/light mode settings
  - *Example Inline Usage:*
    - `[I love Nelson!](https://twitte.com/PupperNelson/status/1375532883264294912)`
- **Spotify Embed**
  - Turns Spotify URIs into full embeds
  - Best for songs, but can handle albums, playlists, artists, etc.
  - Only small embeds *(for now!)*
  - *Example Inline Usage:*
    - `spotify:track:7EaL8Zt8UAabmP6sQydgx9`
- **vanilla-tilt**
  - Allows use of the [vanilla-tilt.js library](https://micku7zu.github.io/vanilla-tilt.js/)
  - Works on any image tag
  - *Example Inline Usage:*
    - `[card]![Alt-Text](your-card-image.png)[/card]`