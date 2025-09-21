## Some Commands
```
cd /                           =>      C:\
mkdir myproject                =>      ينشئ مجلد اسمه myproject
-m                             =>      git branch -m master main =>   يغيّر الفرع من master إلى main فقط إذا main غير موجود
-M                             =>      git branch -M master main =>   حتى لو عندك فرع اسمه main من قبل، رح يغيّر الفرع الحالي إلى main
```

## Get the Project
```
git clone  https://github.com/ZakariyaeMahou/GitHub.git                  =>      (HTTP)
```

> [!NOTE] الفرق بين git clone وبين git pull
> - **`git clone`**: تستخدمه **مرة واحدة فقط** في البداية لتنزيل المشروع لأول مرة.
> - **`git pull`**: تستعمله بعد ذلك، كلما أردت تحديث نسختك المحلية بآخر التغييرات.

## Add Reset Commit
```
git add *               vs                git reset head *
git clean
git commit -m "msg"
```

## Push Local Changes
```
git add *
git commit -m "changes"
git branch -M main
git push -u origin main
```

## Pull changes
```
git pull origin
```
---
---
## Create Repository From Existing Project
```
git init
git add *
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:ZakariyaeMAHOU/DEV.git                  =>         (SSH)
git push -u origin main
```
