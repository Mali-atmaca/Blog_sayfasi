# Dinamik Blog Yönetim Sistemi (CMS) 📝

Bu proje; PHP, MySQL ve CSS kullanılarak geliştirilmiş, kullanıcıların kayıt olabildiği, giriş yapabildiği ve blog gönderileri oluşturup yönetebildiği tam kapsamlı bir **İçerik Yönetim Sistemi (CMS)** prototipidir.

## 🚀 Öne Çıkan Özellikler
* **Kullanıcı Kimlik Doğrulama:** Güvenli kayıt olma (`kayit_ol.php`), giriş (`giris.php`) ve çıkış (`cikis.php`) mekanizmaları.
* **Tam CRUD Operasyonları:** Blog gönderilerini oluşturma (`yeni_gonderi.php`), görüntüleme (`detaylar.php`), düzenleme (`gonderi_duzenle.php`) ve silme (`gonderi_sil.php`) yetenekleri.
* **Dinamik Veritabanı Entegrasyonu:** Verilerin MySQL üzerinde saklanması ve `veritabani.php` üzerinden yönetilmesi.
* **Responsive Tasarım:** Her sayfa için özel olarak hazırlanmış CSS dosyaları ile düzenli arayüz.

## 🛠️ Kullanılan Teknolojiler
* **Backend:** PHP
* **Veritabanı:** MySQL / SQL
* **Frontend:** HTML5, CSS3

## 📁 Proje Yapısı ve Görevleri
| Dosya | Görev |
| :--- | :--- |
| `index.php` | Blogun ana sayfası, gönderilerin listelendiği merkez nokta. |
| `veritabani.php` | MySQL veritabanı bağlantısını sağlayan yapılandırma dosyası. |
| `blog_sitesi.sql` | Veritabanı tablolarını ve örnek verileri içeren SQL dökümü. |
| `style_genel.css` | Tüm sayfalarda ortak kullanılan temel tasarım kuralları. |

## ⚙️ Kurulum ve Çalıştırma

1. **Veritabanını Hazırlayın:**
   * Bir MySQL yönetim aracı (phpMyAdmin vb.) üzerinden yeni bir veritabanı oluşturun.
   * `blog_sitesi.sql` dosyasını bu veritabanına içe aktarın (Import).

2. **Bağlantı Ayarları:**
   * `veritabani.php` dosyasını açarak veritabanı adınızı, kullanıcı adınızı ve şifrenizi güncelleyin.

3. **Sunucuyu Başlatın:**
   * Proje klasörünü yerel sunucunuza (XAMPP, WAMP vb.) taşıyın ve tarayıcıda `localhost/proje_klasörü` adresine gidin.

---
*Bu proje, web geliştirme ve veritabanı yönetimi prensiplerini uygulamalı olarak göstermek amacıyla hazırlanmıştır.*
