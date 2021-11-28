installation

composer install
php artisan migrate
npm install && npm ci && npm run dev


#create new Feature
`php artisan module:make [Feature Name]`
`php artisan make:datatables ../../Modules/[Feature Name]/Entities/[Feature Name]Datatables` for making datatables *dont forget change namespace*


#naming branch
`module_[feature name]` for new modules
`bugfix_[bugfix name]_[issue number]` for bugfixing issue
`hotfix_[hotfix name]_[issue number]` for hotfix issue
`change_[change name]_[issue number]` for changing name
`v0.0.0-alpha` for first release
`v0.0.0-beta` for update after first release
`v0.0.[number PR module]` for module release
`v0.[number sequence].0` for bugfix, hotfix, change release
`v[number sequence].0.0` for BIG CHANGE Release  


#Pull Request
always create PR after new module or any changes
format PR Name : [Programmer Name] - Changes name
use  fixed if fixing issue or any changes
