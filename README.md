# The Idea

The goal of this project is to bring as many used devices as possible back to being useful - ideally with an OS build that is still maintained.

For particularly interesting devices (devices donated frequently and devices that are easy to work on), we will provide custom builds that already include the educational software we want.

For other devices, we keep a database of external projects that support them (e.g. LineageOS, FreeMobileOS, ReactOS, /e/), and provide links to their firmware images as well as apk files containing important apps to be installed after the OS is installed (same ones that are already present in our custom builds).

# Code

The reflash directory contains a set of php scripts, an initial database etc.

Those scripts don't provide a fancy UI, and are more of a proof of concept than a real world thing. It takes a few shortcuts that usually shouldn't be taken, sometimes a deadline is more important than usual best practices.

To use them, just drop them into a "reflash" directory on a web server and run init.sh to initialize the database. (The script assumes mariadb or mysql is set up with a "root" account, the way it is in e.g. OpenMandriva. You may have to edit the script a little in other setups. You're certainly encouraged to change the hardcoded database password.)

To add a local build, just place it in a subdirectory named after the device's codename -- the scripts will offer the files for download and -- if that file exists -- embed a file called `install.txt` into the documentation page.

As a user, just visit the reflash directory on the web server and follow its instructions.

# Hardware

This document describes what donated hardware is best suited for our purposes.
We're splitting devices into 4 categories:

*Ideal* devices can be flashed with a new open firmware build that is still maintained and will continue to be maintained for the foreseeable future.
*Good* devices can be flashed with an open firmware build that has been dropped upstream, but can be revived without too much effort, and devices that have a current open firmware build that is still maintained, but which needs extra efforts to install (e.g. need to retrieve a bootloader unlock code somewhere).
*Usable* devices are no longer maintained and don't have any firmware builds, but the latest supported firmware is good enough to run the current learning tools if the user can live with the risks of an unsupported device that may have security problems.
*Not Usable* devices are no longer supported and can't run the learning tools.

Any device not in the list is likely either *Usable* or *Not Usable* - with any device released in or after 2015 likely falling into the *Usable* category.
While this may appear odd, it is true that sometimes a newer device can be less useful than an older device - this is because not every device receives equal support from the community.

# Smartphones
## Ideal
* Asus Zenfone 6
* BQ Aquaris X
* BQ Aquaris X Pro
* Essential PH-1
* Fairphone FP2
* Fairphone FP3
* HTC One (M8)
* HTC One (M8) Dual SIM
* LeEco Le Max2
* LeEco Le Pro 3
* LeEco Le Pro3 Elite
* Lenovo P2
* LG G2
* LG G3
* LG G5
* LG V20
* Motorola Moto G6 Plus
* Motorola Moto G7
* Motorola Moto G7 Plus
* Motorola Moto One Power
* Motorola Moto X 2014
* Motorola Moto X4
* Motorola Moto Z
* Motorola Moto Z2 Force
* Nexus 5X
* Nexus 6
* Nexus 6P
* Nubia Z17
* OnePlus 2
* OnePlus 3
* OnePlus 3T
* OnePlus 6
* OnePlus 6T
* OnePlus 7
* OnePlus 7 Pro
* PinePhone
* Pixel
* Pixel XL
* Pixel 2
* Pixel 2 XL
* Pixel 3
* Pixel 3 XL
* Pixel 4
* Pixel 4 XL
* PlanetComputer Cosmo
* PlanetComputer Gemini
* Razer Phone
* Samsung Galaxy A3 (2016)
* Samsung Galaxy A5 (2016)
* Samsung Galaxy Note 9
* Samsung Galaxy S III Neo
* Samsung Galaxy S4
* Samsung Galaxy S4 Active
* Samsung Galaxy S4 Value Edition
* Samsung Galaxy S9
* Samsung Galaxy S9+
* Sony Xperia 5
* Sony Xperia 5 Dual
* Sony Xperia 1
* Sony Xperia 1 Dual
* Sony Xperia 10
* Sony Xperia 10 Dual
* Sony Xperia 10 Plus
* Sony Xperia 10 Plus Dual
* Sony Xperia Touch
* Sony Xperia X Compact
* Sony Xperia X Performance
* Sony Xperia X Performance Dual
* Sony Xperia X
* Sony Xperia X Dual
* Sony Xperia XA2
* Sony Xperia XA2 Dual
* Sony Xperia XA2 Plus
* Sony Xperia XA2 Plus Dual
* Sony Xperia XA2 Ultra
* Sony Xperia XA2 Ultra Dual
* Sony Xperia XZ1
* Sony Xperia XZ1 Dual
* Sony Xperia XZ2
* Sony Xperia XZ2 Dual
* Sony Xperia XZ2 Compact
* Sony Xperia XZ2 Compact Dual
* Sony Xperia XZ3
* Sony Xperia XZ3 Dual
* Sony Xperia XZ Premium
* Sony Xperia XZ Premium Dual
* Sony Xperia XZ
* Sony Xperia XZ Dual
* Sony Xperia XZs
* Sony Xperia XZs Dual
* Wileyfox Swift
* Wingtech Redmi 2
* Xiaomi Mi 6
* Xiaomi Mi 6X
* Xiaomi Mi 8
* Xiaomi Mi A2
* Xiaomi Mi MIX 2
* Xiaomi Mi MIX 2S
* Xiaomi Mi Note 3
* Xiaomi Poco F1
* Xiaomi Redmi 4(X)
* Xiaomi Redmi Note 4
* Xiaomi Redmi 7
* Xiaomi Redmi Note 5 Pro
* Xiaomi Redmi Note 6 Pro
* Xiaomi Redmi Note 7
* Xiaomi Redmi Note 7 Pro
* Yandex Phone
* ZUK Z2 Plus

## Good
* ARK Benefit A3
* Asus Zenfone 3
* Asus Zenfone Max Pro M1
* Asus Zenfone Max Pro M2
* BQ Aquaris X2
* BQ Aquaris X2 Pro
* Huawei Honor 5X
* Huawei Honor View 10
* Huawei P20 Pro
* LeEco Le 2
* Nextbit Robin
* OnePlus One
* OnePlus 5
* OnePlus 5T
* OPPO F1
* OPPO Find 7a/s
* OPPO R5/R5s
* OPPO R7 Plus
* OPPO R7s
* Realme 2 Pro
* Realme 3 Pro
* Samsung Galaxy A5 (2017)
* Samsung Galaxy A7 (2017)
* Samsung Galaxy Grand 2 Duos
* Samsung Galaxy Note 3 LTE
* Samsung Galaxy S5 Active
* Samsung Galaxy S5 LTE
* Samsung Galaxy S5 Neo
* Samsung Galaxy S5 Plus
* Sony Xperia Z Ultra
* Sony Xperia Z1 Compact
* Sony Xperia Z1
* Sony Xperia Z2
* Sony Xperia Z3 Compact
* Sony Xperia Z3
* Sony Xperia Z3+
* Sony Xperia Z5 Compact
* Sony Xperia Z5 Premium Dual
* Sony Xperia Z5 Premium
* Sony Xperia Z5
* Xiaomi Mi 5
* Xiaomi Mi 5s
* Xiaomi Mi 5s Plus
* Xiaomi Mi MIX
* Xiaomi Mi Note 2
* Xiaomi Redmi 3S/3X
* ZUK Z1

## Usable
* Huawei Mate 20x

# Tablets
## Ideal
* PineTab
* Samsung Galaxy Tab S5e (WiFi)

## Good
* Lenovo Yoga Tap 3 Plus LTE
* Lenovo Yoga Tab 3 Plus Wi-Fi
* Pixel C
* Samsung Galaxy Tab S2 8.0 Wi-Fi (2016)
* Samsung Galaxy Tab S2 9.7 Wi-Fi (2016)
* Sony Xperia Z2 Tablet
* Sony Xperia Z3 Tablet Compact
* Sony Xperia Z4 Tablet

# Desktop/Laptop
## Ideal
* Any device with a 64-bit processor and at least 2 GB RAM

# Others (Development boards etc.)
## Ideal
* Raspberry Pi 4
* Raspberry Pi 3
* HiKey 960
