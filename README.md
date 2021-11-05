# Alfred Workflow - Open in Visual Studio Code

An [Alfred 4](https://www.alfredapp.com/) workflow opening files or folders with [Visual Studio Code](https://code.visualstudio.com/).

![Screenshot](images/screenshot.png)

**Note: [Alfred Powerpack](https://www.alfredapp.com/powerpack/) is required to use workflows.**

## Installation

1. [Download the latest version](https://github.com/Nizari/alfred-open-in-vscode-workflow/releases/download/v1.1.0/alfred-open-in-vscode-workflow.alfredworkflow)
2. Install the workflow by double-clicking the `.alfredworkflow` file
3. You can add the workflow to a category, then click "Import" to finish importing. You'll now see the workflow listed in the left sidebar of your Workflows preferences pane.
4. Make sure your [Alfred workflow environment variables](https://www.alfredapp.com/help/workflows/advanced/variables/) are set correctly

### Example Alfred workflow environment variables

```console
cli => /usr/local/bin/code
wds => /Users/nizari91/Development/http/app,/Users/nizari91/Development/http/vue
```

![Screenshot](images/screenshot4.png)

## Usage

Just type `code` followed by your search query.

```console
code <query>
```

Press `<enter>` to open the directory with your Visual Studio Code.

## Change IDE Editor

You can easily change the IDE in which you open the folder by updating the `cli` execution path.

For example setting it to `/usr/local/bin/subl` will open your directory with Sublime.

![Screenshot](images/screenshot2.png)

## Troubleshoot

### Nothing happens?

In this case open the [Alfred Debugger Utility](https://www.alfredapp.com/help/workflows/utilities/debug/) and see what error is thrown. A common use case can be that your IDE execution file doesn't exist.

![Screenshot](images/screenshot3.png)
