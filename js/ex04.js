
const random_hex_color_code = () => {
    let n = (Math.random() * 0xffffff * 1000000).toString(16);
    return '#' + n.slice(0, 6);
  };
  
  const randomColor = random_hex_color_code();
  document.write(randomColor)
  // เลือก element ที่มี id เป็น "myBox"
  const box = document.getElementById("box");
  
  // ตั้งค่าสไตล์ให้กับกล่อง
  box.style.width = "100px";
  box.style.height = "100px";
  box.style.backgroundColor = randomColor;
