###部署

```shell

git clone git@github.com:hyrxb/laravel-vue.git


cd laravel-vue


npm install


npm run watch



```

> 注意　webpack.mix.js　一定不要忘了加版本号，否则由于缓存的问题，导致vue组件怎么都加载不出来！！！
```javascript


mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/vueapp.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css').version();
if (mix.inProduction()) {
    mix.version();
} ;


````


## 引用

https://blog.pusher.com/why-vuejs-laravel/



### 访问

http://www.cms.com/home