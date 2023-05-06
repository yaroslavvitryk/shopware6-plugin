import Plugin from 'src/plugin-system/plugin.class';

export default class MyPlugin extends Plugin {
  async init() {
    const response = await fetch('/color')
    const json = await response.json()
    document.querySelectorAll('button.btn.btn-block.btn-buy').forEach(btn => {
      btn.style.backgroundColor = json.color;
      btn.style.borderColor = json.color;
    })
  }
}