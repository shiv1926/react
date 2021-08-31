how to install react locally, or if we install react globally (not recommend way) then how to update this.


https://www.thapatechnical.com/2020/05/install-reactjs-windows-install-nodejs.html

Error: EPERM: operation not permitted, mkdir 'C:\Users\shivkumar'

how to update -g create-react-app

npm install -g create-react-app-updater

https://create-react-app.dev/docs/getting-started/

npm install node-sass --save : local command in folder
npm install -g node-sass --save : global command

npm uninstall -g create-react-app

npm cache clean --force

=================
If you want to create new react app then

$ npm install create-react-app

If an error occurs create-react-app: command not found then install with -g, it happens because node is installed globally and it is not getting the node in local

$ npm install -g create-react-app

$ create-react-app app_name
$ cd app_name
app_name$ npm start
==========================================
