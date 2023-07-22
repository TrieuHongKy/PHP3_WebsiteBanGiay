<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
           [
               'title'=>'Đi biển nên mặc đồ gì? Thời trang đi biển cực chất cho hè 2023',
               'slug'=>'di-bien-nen-mac-do-gi-thoi-trang-cuc-chat-cho-mua-he-2023',
               'content'=>'Chọn đồ đi biển như thế nào vừa xinh đẹp, mặc lên thoải mái, tôn dáng mà còn ăn ảnh? Nếu bạn cũng đang có thắc mắc này thì bài viết ngày hôm nay chính là gợi ý mà bạn không nên bỏ qua. Từ những mẫu váy áo cho các nàng đi biển cho đến đồ đi du lịch cho phái nam, đồ đi biển gia đình, mặc nhóm,... sẽ dược chúng tôi chia sẻ ngay. Cùng Cardina tìm hiểu các bạn nhé.',
               'author_id'=>'1',
               'date'=>toDay(),
               'image'=>'premium_photo-1684917942027-8a6192f97ac2.avif',
               'category_id'=>'3',
               'created_at'=>Now(),'updated_at'=>Now()],
           [
               'title'=>'Đi biển mặc gì đẹp để tỏa sáng hết cỡ vào mùa hè',
               'slug'=>'di-bien-mac-gi-dep-de-toa-sang-het-co-vao-mua-he',
               'content'=>'Nếu bạn đang lo ngại những chiếc quần bơi với diện tích khiêm tốn có thể làm bạn lộ hàng hoặc làm bạn trở nên không thoải mái, thì những chiếc quần short jeans kín đáo đương nhiên là sự lựa chọn tuyệt vời cho bạn. Trong năm 2023 này, vẫn với quần jeans nhưng người ta lại có cách mix táo bạo hơn đó là mix quần jeans với các mẫu bikini, vừa nữ tính nhưng vẫn quyến rũ cho các cô nàng bánh bèo lại có chút cá tính. ',
               'author_id'=>'1',
               'date'=>toDay(),
               'image'=>'photo-1496747611176-843222e1e57c.avif',
               'category_id'=>'3',
               'created_at'=>Now(),'updated_at'=>Now()],
           [
               'title'=>'Thời trang đường phố là gì? Xu hướng Street Style 2022',
               'slug'=>'thoi-trang-duong-pho-la-gi?-xu-huong-street-style2022',
               'content'=>'Thời trang thường gắn liền với cuộc sống hàng ngày. Vậy nên phong cách Street Style hay thời trang đường phố vẫn chưa bao giờ hạ nhiệt và luôn dẫn đầu danh sách được nhiều bạn trẻ ưa chuộng, lựa chọn. Để nắm bắt thêm về xu hướng thời trang đường phố mới nhất 2022, mời bạn đọc khám phá thêm qua bài viết dưới đây.',
               'author_id'=>'1',
               'date'=>toDay(),
               'image'=>'photo-1532332248682-206cc786359f.avif',
               'category_id'=>'1',
               'created_at'=>Now(),'updated_at'=>Now()],
           [
               'title'=>'Top 5 Phong Cách Street Style Được Giới Trẻ Yêu Thích Nhất',
               'slug'=>'top-5-phong-cach-street-style-duoc-gioi-tre-yeu-thich-nhat',
               'content'=>'Street style ngày càng trở thành xu hướng thời trang phổ biến được giới trẻ vô cùng yêu thích. Vậy phong cách street style là gì? Điều gì khiến nó trở thành xu hướng được yêu thích bậc nhất của các fashionista trong năm 2021. Hãy cùng Thiên Phước vén màn những bí mật của phong cách thời trang độc đáo này ở bài viết dưới đây!',
               'author_id'=>'1','date'=>toDay(),
               'image'=>'photo-1609535766106-0864edad28e4.avif',
               'category_id'=>'1',
               'created_at'=>Now(),'updated_at'=>Now()],
           [
               'title'=>'Thiết kế thời trang và nghề thủ công truyền thống',
               'slug'=>'thiet-ke-thoi-trang-va-nghe-thu-cong-truyen-thong',
               'content'=>'Thiết kế thời trang và Nghề thủ công truyền thống. Hai khái niệm nghe có vẻ không ăn nhập gì với nhau lại trở thành một công đoạn không thể thiếu và là điểm nhấn đối với các sản phẩm handmade cao cấp nhà Maries. Thiết kế trong nghề thủ công truyền thống là một khái niệm rất đặc biệt.',
               'author_id'=>'1','date'=>toDay(),
               'image'=>'photo-1519415943484-9fa1873496d4.avif',
               'category_id'=>'2',
               'created_at'=>Now(),'updated_at'=>Now()],
           [
               'title'=>'Trang phục Công Trí với nghệ thuật thủ công được tán thưởng trên tạp chí Vogue Mỹ',
               'slug'=>'trang-phuc-cong-tri-voi-nghe-thuat-thu-cong-duoc-tan-thuong-tren-tap-chi-vogue-my',
               'content'=>'Nhà thiết kế Công Trí mới đây ra mắt bộ sưu tập CONG TRI Thu Đông 2021 và được đăng tải trên Vogue Runway theo lịch trình tuần lễ thời trang quốc tế của Mỹ. Khác với bộ sưu tập Xuân Hè 2021 tập trung vào cảm hứng thời trang thập niên 1990, bộ sưu tập CONG TRI Thu Đông 2021 lấy điểm nhấn ở kỹ thuật xử lý chất liệu, đan móc, đính kết thủ công, qua đó gửi gắm ẩn ý về hình ảnh người phụ nữ.',
               'author_id'=>'1',
               'date'=>toDay(),
               'image'=>'photo-1558882268-15aa056d885f.avif',
               'category_id'=>'2',
               'created_at'=>Now(),'updated_at'=>Now()],
        ]);
    }
}
