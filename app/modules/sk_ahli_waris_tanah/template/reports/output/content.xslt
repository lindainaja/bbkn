<?xml version="1.0" encoding="UTF-8" standalone="yes"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<w:document xmlns:wpc="http://schemas.microsoft.com/office/word/2010/wordprocessingCanvas" xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:wp14="http://schemas.microsoft.com/office/word/2010/wordprocessingDrawing" xmlns:wp="http://schemas.openxmlformats.org/drawingml/2006/wordprocessingDrawing" xmlns:w10="urn:schemas-microsoft-com:office:word" xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main" xmlns:w14="http://schemas.microsoft.com/office/word/2010/wordml" xmlns:wpg="http://schemas.microsoft.com/office/word/2010/wordprocessingGroup" xmlns:wpi="http://schemas.microsoft.com/office/word/2010/wordprocessingInk" xmlns:wne="http://schemas.microsoft.com/office/word/2006/wordml" xmlns:wps="http://schemas.microsoft.com/office/word/2010/wordprocessingShape" mc:Ignorable="w14 wp14">
  <w:body>

<xsl:for-each select="root/row">
    <w:p w:rsidR="00947BDE" w:rsidRDefault="00947BDE" w:rsidP="00904933">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00C10705" w:rsidRPr="00C10705" w:rsidRDefault="00C10705" w:rsidP="00F643CD">
      <w:pPr>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00C10705">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:t>SURAT KETERANGAN AHLI WARIS</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00C10705" w:rsidRPr="007C7451" w:rsidRDefault="00C10705" w:rsidP="00586AAA">
      <w:pPr>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00C10705">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:t xml:space="preserve">NOMOR : </w:t>
      </w:r>
      <w:r w:rsidR="007C7451">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="no"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00C10705" w:rsidRPr="0024114A" w:rsidRDefault="00C10705" w:rsidP="00C10705">
      <w:pPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">Yang bertanda tangan dibawah ini : </w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00C10705" w:rsidRPr="0024114A" w:rsidRDefault="00C10705" w:rsidP="00C10705">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="900"/>
        </w:tabs>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="007A5A8F" w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t>N a m a</w:t>
      </w:r>
      <w:r w:rsidR="007A5A8F" w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="007A5A8F" w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="007A5A8F" w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">:   </w:t>
      </w:r>
      <w:r w:rsidR="007C7451">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_nama"/></w:t>
      </w:r>
      <w:r w:rsidR="008C48F6">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00C10705" w:rsidRPr="0024114A" w:rsidRDefault="00C10705" w:rsidP="00C10705">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="900"/>
          <w:tab w:val="left" w:pos="2820"/>
        </w:tabs>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t>N I P</w:t>
      </w:r>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">:   </w:t>
      </w:r>
      <w:r w:rsidR="007C7451">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_nip"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00C10705" w:rsidRDefault="00C10705" w:rsidP="00C10705">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="900"/>
        </w:tabs>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t>J a b a t a n</w:t>
      </w:r>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">:   </w:t>
      </w:r>
      <w:r w:rsidR="007C7451">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00DC6504" w:rsidRPr="00B41096" w:rsidRDefault="00DC6504" w:rsidP="00C10705">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="900"/>
        </w:tabs>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="10"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00DC6504" w:rsidRDefault="00DC6504" w:rsidP="00DC6504">
      <w:pPr>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">Menerangkan dengan sebenarnya bahwa nama tersebut di bawah ini adalah benar Ahli Waris dari Almarhum </w:t>
      </w:r>
      <w:r w:rsidR="007C7451">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="nama_almarhum"/></w:t>
      </w:r>
      <w:r w:rsidR="005D6E9A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="00947BDE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t>Pemilik Sertifikat Hak M</w:t>
      </w:r>
      <w:r w:rsidR="00947BDE" w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">ilik dengan Nomor : </w:t>
      </w:r>
      <w:r w:rsidR="007C7451">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"><xsl:value-of select="no_sertifikat"/> </w:t>
      </w:r>
      <w:r w:rsidR="009853C6">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="004E5845">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t>yang meninggal dunia pada h</w:t>
      </w:r>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">ari </w:t>
      </w:r>
      <w:r w:rsidR="007C7451">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="hari_meninggal"/></w:t>
      </w:r>
      <w:r w:rsidR="004E5845">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> Tanggal </w:t>
      </w:r>
      <w:r w:rsidR="007C7451">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="tanggal_meninggal"/></w:t>
      </w:r>
      <w:r w:rsidR="004E5845">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> di Banten</w:t>
      </w:r>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="009853C6">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t>dengan Nomor S</w:t>
      </w:r>
      <w:r w:rsidR="00247442">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">urat Kematian : </w:t>
      </w:r>
      <w:r w:rsidR="007C7451">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="no_surat_kematian"/></w:t>
      </w:r>
      <w:r w:rsidR="004E5845">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t>di Kelurahan Babakan</w:t>
      </w:r>
      <w:r w:rsidR="00CE3BC3">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t>,</w:t>
      </w:r>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> Kecamatan Legok, Kabupaten Tangerang,</w:t>
      </w:r>
      <w:r w:rsidR="00CE3BC3">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> Yang m</w:t>
      </w:r>
      <w:r w:rsidR="005D6E9A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t>enikah secara syah dengan Sdr</w:t>
      </w:r>
      <w:r w:rsidR="00CE3BC3">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="005D6E9A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">Alm. </w:t>
      </w:r>
      <w:r w:rsidR="007C7451">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="nama_pasangan_almarhum"/></w:t>
      </w:r>
      <w:r w:rsidR="00904933">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="005D6E9A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t>(</w:t>
      </w:r>
      <w:r w:rsidR="007C7451">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="alias_nama_pasangan"/></w:t>
      </w:r>
      <w:r w:rsidR="00904933">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t>)</w:t>
      </w:r>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="00CE3BC3">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">dan mempunyai </w:t>
      </w:r>
      <w:r w:rsidR="00CE64E6">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="jumlah_anak"/></w:t>
      </w:r>
      <w:r w:rsidR="009853C6">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> (</w:t>
      </w:r>
      <w:r w:rsidR="00CE64E6">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="jumlah_anak_txt"/></w:t>
      </w:r>
      <w:r w:rsidR="004E5845">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t>) orang anak</w:t>
      </w:r>
      <w:r w:rsidR="00247442">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">. Adapun </w:t>
      </w:r>
      <w:r w:rsidR="00CE64E6">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="jumlah_anak"/></w:t>
      </w:r>
      <w:r w:rsidR="00CE3BC3">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> ( </w:t>
      </w:r>
      <w:r w:rsidR="00CE64E6">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="jumlah_anak_txt"/></w:t>
      </w:r>
      <w:bookmarkStart w:id="0" w:name="_GoBack"/>
      <w:bookmarkEnd w:id="0"/>
      <w:r w:rsidR="00CE3BC3">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> ) orang</w:t>
      </w:r>
      <w:r w:rsidR="004E5845">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">sebagai Ahli </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">Waris </w:t>
      </w:r>
      <w:r w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t>yaitu :</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="002A3332" w:rsidRPr="003C3D42" w:rsidRDefault="002A3332" w:rsidP="00DC6504">
      <w:pPr>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="2"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00C10705" w:rsidRPr="003C3D42" w:rsidRDefault="00C10705" w:rsidP="00C10705">
      <w:pPr>
        <w:ind w:firstLine="720"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="12"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:tbl>
      <w:tblPr>
        <w:tblW w:w="10690" w:type="dxa"/>
        <w:tblInd w:w="-34" w:type="dxa"/>
        <w:tblLook w:val="01E0" w:firstRow="1" w:lastRow="1" w:firstColumn="1" w:lastColumn="1" w:noHBand="0" w:noVBand="0"/>
      </w:tblPr>
      <w:tblGrid>
        <w:gridCol w:w="1542"/>
        <w:gridCol w:w="3775"/>
        <w:gridCol w:w="1539"/>
        <w:gridCol w:w="3834"/>
      </w:tblGrid>
      <w:tr w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidTr="00E16565">
        <w:trPr>
          <w:trHeight w:val="776"/>
        </w:trPr>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="1542" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="00613507">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t>1. Nama</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="00613507">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t>TTL</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="00613507">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">   Status</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="00613507">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:ind w:right="-300"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">    Pekerjaan</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="00613507">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">    Alamat</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="3775" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="00613507">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw1_nama"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="00613507">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw1_ttl"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00AE1260" w:rsidRDefault="00247442" w:rsidP="00613507">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw1_status"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="00613507">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw1_pekerjaan"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="00247442">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">: </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw1_alamat"/></w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="1539" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t>3</w:t>
            </w:r>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t>. Nama</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t>TTL</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">   Status</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:ind w:right="-300"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">    Pekerjaan</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">    Alamat</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="3834" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw3_nama"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw3_ttl"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00AE1260" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw3_status"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw3_pekerjaan"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">: </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw3_alamat"/></w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidTr="00E16565">
        <w:trPr>
          <w:trHeight w:val="949"/>
        </w:trPr>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="1542" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t>2</w:t>
            </w:r>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t>. Nama</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t>TTL</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">   Status</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:ind w:right="-300"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">    Pekerjaan</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">    Alamat</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="3775" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw2_nama"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw2_ttl"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00AE1260" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw2_status"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw2_pekerjaan"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">: </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw2_alamat"/></w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="1539" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t>4</w:t>
            </w:r>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t>. Nama</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t>TTL</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">   Status</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:ind w:right="-300"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">    Pekerjaan</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">    Alamat</w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="3834" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw4_nama"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw4_ttl"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00AE1260" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw4_status"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00931C3D">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">:  </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw4_pekerjaan"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00247442" w:rsidRPr="00931C3D" w:rsidRDefault="00247442" w:rsidP="002A4F95">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">: </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw4_alamat"/></w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr w:rsidR="0059220A" w:rsidRPr="00931C3D" w:rsidTr="00E16565">
        <w:trPr>
          <w:trHeight w:val="949"/>
        </w:trPr>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="1542" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="0059220A" w:rsidRPr="00931C3D" w:rsidRDefault="0059220A" w:rsidP="005D6E9A">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="3775" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="0059220A" w:rsidRPr="00931C3D" w:rsidRDefault="0059220A" w:rsidP="00531C37">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:ind w:left="173" w:hanging="173"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="1539" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="0059220A" w:rsidRPr="00AE1260" w:rsidRDefault="0059220A" w:rsidP="00515FD8">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="3834" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="0059220A" w:rsidRPr="00AE1260" w:rsidRDefault="0059220A" w:rsidP="00515FD8">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:ind w:left="173" w:hanging="173"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
      </w:tr>
    </w:tbl>
    <w:p w:rsidR="00C10705" w:rsidRPr="005E0EF1" w:rsidRDefault="00C10705" w:rsidP="00C10705">
      <w:pPr>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="18"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="005E0EF1">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="18"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>Demikian Surat keter</w:t>
      </w:r>
      <w:r w:rsidR="00D62B0B" w:rsidRPr="005E0EF1">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="18"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>angan ini dibuat dengan sebenarnya,</w:t>
      </w:r>
      <w:r w:rsidRPr="005E0EF1">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="18"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> agar dapat dipergunakan sebagaimana mestinya.</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="0024114A" w:rsidRPr="005E0EF1" w:rsidRDefault="0024114A" w:rsidP="00C10705">
      <w:pPr>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="18"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="0024114A" w:rsidRPr="00613507" w:rsidRDefault="00406F90" w:rsidP="00406F90">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:u w:val="single"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:u w:val="single"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">TANDA TANGAN </w:t>
      </w:r>
      <w:r w:rsidR="0024114A" w:rsidRPr="00613507">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:u w:val="single"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>AHLI WARIS</w:t>
      </w:r>
      <w:r w:rsidR="0024114A" w:rsidRPr="00613507">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:u w:val="single"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00944235" w:rsidRDefault="00944235" w:rsidP="00C10705">
      <w:pPr>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:tbl>
      <w:tblPr>
        <w:tblW w:w="0" w:type="auto"/>
        <w:tblLook w:val="04A0" w:firstRow="1" w:lastRow="0" w:firstColumn="1" w:lastColumn="0" w:noHBand="0" w:noVBand="1"/>
      </w:tblPr>
      <w:tblGrid>
        <w:gridCol w:w="5167"/>
        <w:gridCol w:w="5168"/>
      </w:tblGrid>
      <w:tr w:rsidR="000543B5" w:rsidRPr="0011145E" w:rsidTr="00947BDE">
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="5167" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="0059220A" w:rsidRPr="00931C3D" w:rsidRDefault="000543B5" w:rsidP="0059220A">
            <w:pPr>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="0011145E">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>1.</w:t>
            </w:r>
            <w:r w:rsidR="0059220A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t xml:space="preserve"> </w:t>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
              <w:t>..................</w:t>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t>(</w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw1_status"/></w:t>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve"> Alm.)</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00E46681" w:rsidRPr="0011145E" w:rsidRDefault="000543B5" w:rsidP="00947BDE">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="426"/>
              </w:tabs>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="0011145E">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>2.</w:t>
            </w:r>
            <w:r w:rsidR="0059220A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t xml:space="preserve"> </w:t>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
              <w:t>..................</w:t>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:tab/>
              <w:t>(</w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw2_status"/></w:t>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve"> Alm.)</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="0011145E" w:rsidRDefault="0059220A" w:rsidP="00947BDE">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="426"/>
              </w:tabs>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t xml:space="preserve">3. </w:t>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
              <w:t>..................</w:t>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:tab/>
              <w:t>(</w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw3_status"/></w:t>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve"> Alm.)</w:t>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:tab/>
            </w:r>
          </w:p>
          <w:p w:rsidR="005D6E9A" w:rsidRDefault="005D6E9A" w:rsidP="00947BDE">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="426"/>
              </w:tabs>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve">4. </w:t>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
              <w:t>..................</w:t>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:tab/>
              <w:t>(</w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw4_status"/></w:t>
            </w:r>
            <w:r w:rsidR="00337AF3">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t xml:space="preserve"> Alm.)</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00E46681" w:rsidRPr="0011145E" w:rsidRDefault="00E46681" w:rsidP="00E16565">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="426"/>
              </w:tabs>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="5168" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="000543B5" w:rsidRPr="0011145E" w:rsidRDefault="00AE01F7" w:rsidP="0011145E">
            <w:pPr>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:noProof/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <mc:AlternateContent>
                <mc:Choice Requires="wps">
                  <w:drawing>
                    <wp:anchor distT="0" distB="0" distL="114300" distR="114300" simplePos="0" relativeHeight="251657728" behindDoc="0" locked="0" layoutInCell="1" allowOverlap="1">
                      <wp:simplePos x="0" y="0"/>
                      <wp:positionH relativeFrom="column">
                        <wp:posOffset>996315</wp:posOffset>
                      </wp:positionH>
                      <wp:positionV relativeFrom="paragraph">
                        <wp:posOffset>41910</wp:posOffset>
                      </wp:positionV>
                      <wp:extent cx="546735" cy="572135"/>
                      <wp:effectExtent l="0" t="3810" r="0" b="0"/>
                      <wp:wrapNone/>
                      <wp:docPr id="3" name="Text Box 284"/>
                      <wp:cNvGraphicFramePr>
                        <a:graphicFrameLocks xmlns:a="http://schemas.openxmlformats.org/drawingml/2006/main"/>
                      </wp:cNvGraphicFramePr>
                      <a:graphic xmlns:a="http://schemas.openxmlformats.org/drawingml/2006/main">
                        <a:graphicData uri="http://schemas.microsoft.com/office/word/2010/wordprocessingShape">
                          <wps:wsp>
                            <wps:cNvSpPr txBox="1">
                              <a:spLocks noChangeArrowheads="1"/>
                            </wps:cNvSpPr>
                            <wps:spPr bwMode="auto">
                              <a:xfrm>
                                <a:off x="0" y="0"/>
                                <a:ext cx="546735" cy="572135"/>
                              </a:xfrm>
                              <a:prstGeom prst="rect">
                                <a:avLst/>
                              </a:prstGeom>
                              <a:solidFill>
                                <a:srgbClr val="FFFFFF"/>
                              </a:solidFill>
                              <a:ln>
                                <a:noFill/>
                              </a:ln>
                              <a:extLst>
                                <a:ext uri="">
                                  <a14:hiddenLine xmlns:a14="http://schemas.microsoft.com/office/drawing/2010/main" w="9525">
                                    <a:solidFill>
                                      <a:srgbClr val="000000"/>
                                    </a:solidFill>
                                    <a:miter lim="800000"/>
                                    <a:headEnd/>
                                    <a:tailEnd/>
                                  </a14:hiddenLine>
                                </a:ext>
                              </a:extLst>
                            </wps:spPr>
                            <wps:txbx>
                              <w:txbxContent>
                                <w:p w:rsidR="00944235" w:rsidRDefault="00944235" w:rsidP="00944235">
                                  <w:pPr>
                                    <w:jc w:val="center"/>
                                    <w:rPr>
                                      <w:sz w:val="16"/>
                                      <w:szCs w:val="16"/>
                                    </w:rPr>
                                  </w:pPr>
                                </w:p>
                                <w:p w:rsidR="00944235" w:rsidRPr="00652EBC" w:rsidRDefault="00944235" w:rsidP="00944235">
                                  <w:pPr>
                                    <w:jc w:val="center"/>
                                    <w:rPr>
                                      <w:sz w:val="16"/>
                                      <w:szCs w:val="16"/>
                                    </w:rPr>
                                  </w:pPr>
                                  <w:r w:rsidRPr="00652EBC">
                                    <w:rPr>
                                      <w:sz w:val="16"/>
                                      <w:szCs w:val="16"/>
                                    </w:rPr>
                                    <w:t>Materai</w:t>
                                  </w:r>
                                </w:p>
                                <w:p w:rsidR="00944235" w:rsidRPr="00652EBC" w:rsidRDefault="00944235" w:rsidP="00944235">
                                  <w:pPr>
                                    <w:jc w:val="center"/>
                                    <w:rPr>
                                      <w:sz w:val="16"/>
                                      <w:szCs w:val="16"/>
                                    </w:rPr>
                                  </w:pPr>
                                  <w:r w:rsidRPr="00652EBC">
                                    <w:rPr>
                                      <w:sz w:val="16"/>
                                      <w:szCs w:val="16"/>
                                    </w:rPr>
                                    <w:t>6000</w:t>
                                  </w:r>
                                </w:p>
                              </w:txbxContent>
                            </wps:txbx>
                            <wps:bodyPr rot="0" vert="horz" wrap="square" lIns="91440" tIns="45720" rIns="91440" bIns="45720" anchor="t" anchorCtr="0" upright="1">
                              <a:noAutofit/>
                            </wps:bodyPr>
                          </wps:wsp>
                        </a:graphicData>
                      </a:graphic>
                      <wp14:sizeRelH relativeFrom="page">
                        <wp14:pctWidth>0</wp14:pctWidth>
                      </wp14:sizeRelH>
                      <wp14:sizeRelV relativeFrom="page">
                        <wp14:pctHeight>0</wp14:pctHeight>
                      </wp14:sizeRelV>
                    </wp:anchor>
                  </w:drawing>
                </mc:Choice>
                <mc:Fallback>
                  <w:pict>
                    <v:shapetype id="_x0000_t202" coordsize="21600,21600" o:spt="202" path="m,l,21600r21600,l21600,xe">
                      <v:stroke joinstyle="miter"/>
                      <v:path gradientshapeok="t" o:connecttype="rect"/>
                    </v:shapetype>
                    <v:shape id="Text Box 284" o:spid="_x0000_s1026" type="#_x0000_t202" style="position:absolute;left:0;text-align:left;margin-left:78.45pt;margin-top:3.3pt;width:43.05pt;height:45.05pt;z-index:251657728;visibility:visible;mso-wrap-style:square;mso-width-percent:0;mso-height-percent:0;mso-wrap-distance-left:9pt;mso-wrap-distance-top:0;mso-wrap-distance-right:9pt;mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;mso-position-horizontal-relative:text;mso-position-vertical:absolute;mso-position-vertical-relative:text;mso-width-percent:0;mso-height-percent:0;mso-width-relative:page;mso-height-relative:page;v-text-anchor:top" o:gfxdata="UEsDBBQABgAIAAAAIQC2gziS/gAAAOEBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRQU7DMBBF&#10;90jcwfIWJU67QAgl6YK0S0CoHGBkTxKLZGx5TGhvj5O2G0SRWNoz/78nu9wcxkFMGNg6quQqL6RA&#10;0s5Y6ir5vt9lD1JwBDIwOMJKHpHlpr69KfdHjyxSmriSfYz+USnWPY7AufNIadK6MEJMx9ApD/oD&#10;OlTrorhX2lFEilmcO2RdNtjC5xDF9pCuTyYBB5bi6bQ4syoJ3g9WQ0ymaiLzg5KdCXlKLjvcW893&#10;SUOqXwnz5DrgnHtJTxOsQfEKIT7DmDSUCaxw7Rqn8787ZsmRM9e2VmPeBN4uqYvTtW7jvijg9N/y&#10;JsXecLq0q+WD6m8AAAD//wMAUEsDBBQABgAIAAAAIQA4/SH/1gAAAJQBAAALAAAAX3JlbHMvLnJl&#10;bHOkkMFqwzAMhu+DvYPRfXGawxijTi+j0GvpHsDYimMaW0Yy2fr2M4PBMnrbUb/Q94l/f/hMi1qR&#10;JVI2sOt6UJgd+ZiDgffL8ekFlFSbvV0oo4EbChzGx4f9GRdb25HMsYhqlCwG5lrLq9biZkxWOiqY&#10;22YiTra2kYMu1l1tQD30/bPm3wwYN0x18gb45AdQl1tp5j/sFB2T0FQ7R0nTNEV3j6o9feQzro1i&#10;OWA14Fm+Q8a1a8+Bvu/d/dMb2JY5uiPbhG/ktn4cqGU/er3pcvwCAAD//wMAUEsDBBQABgAIAAAA&#10;IQDg88M+gQIAABAFAAAOAAAAZHJzL2Uyb0RvYy54bWysVNuO2yAQfa/Uf0C8Z31Z52JrndVemqrS&#10;9iLt9gMI4BgVAwUSe7vqv3fASTbbi1RV9QMGZjjMzDnDxeXQSbTj1gmtapydpRhxRTUTalPjzw+r&#10;yQIj54liRGrFa/zIHb5cvn510ZuK57rVknGLAES5qjc1br03VZI42vKOuDNtuAJjo21HPCztJmGW&#10;9IDeySRP01nSa8uM1ZQ7B7u3oxEvI37TcOo/No3jHskaQ2w+jjaO6zAmywtSbSwxraD7MMg/RNER&#10;oeDSI9Qt8QRtrfgFqhPUaqcbf0Z1l+imEZTHHCCbLP0pm/uWGB5zgeI4cyyT+3+w9MPuk0WC1fgc&#10;I0U6oOiBDx5d6wHliyLUpzeuArd7A45+AAPwHHN15k7TLw4pfdMSteFX1uq+5YRBfFk4mZwcHXFc&#10;AFn37zWDi8jW6wg0NLYLxYNyIEAHnh6P3IRgKGxOi9n8fIoRBdN0nmcwDzeQ6nDYWOffct2hMKmx&#10;BeojONndOT+6HlzCXU5LwVZCyriwm/WNtGhHQCar+O3RX7hJFZyVDsdGxHEHYoQ7gi1EG2l/KrO8&#10;SK/zcrKaLeaTYlVMJ+U8XUzSrLwuZ2lRFrer7yHArKhawRhXd0LxgwSz4u8o3jfDKJ4oQtTXuJzm&#10;05GhPyaZxu93SXbCQ0dK0dV4cXQiVeD1jWKQNqk8EXKcJy/Dj4RADQ7/WJWogkD8KAE/rAdACdJY&#10;a/YIerAa+ALS4RmBSavtN4x6aMkau69bYjlG8p0CTZVZUYQejosCRAALe2pZn1qIogBVY4/ROL3x&#10;Y99vjRWbFm4aVaz0FeiwEVEjz1Ht1QttF5PZPxGhr0/X0ev5IVv+AAAA//8DAFBLAwQUAAYACAAA&#10;ACEAttPuE9wAAAAIAQAADwAAAGRycy9kb3ducmV2LnhtbEyPwU7DMBBE70j8g7VIXBB1KK1DQpwK&#10;kIq4tvQDnHibRMTrKHab9O/ZnuA4mtHMm2Izu16ccQydJw1PiwQEUu1tR42Gw/f28QVEiIas6T2h&#10;hgsG2JS3N4XJrZ9oh+d9bASXUMiNhjbGIZcy1C06ExZ+QGLv6EdnIsuxkXY0E5e7Xi6TRElnOuKF&#10;1gz40WL9sz85Dcev6WGdTdVnPKS7lXo3XVr5i9b3d/PbK4iIc/wLwxWf0aFkpsqfyAbRs16rjKMa&#10;lALB/nL1zN8qDZlKQZaF/H+g/AUAAP//AwBQSwECLQAUAAYACAAAACEAtoM4kv4AAADhAQAAEwAA&#10;AAAAAAAAAAAAAAAAAAAAW0NvbnRlbnRfVHlwZXNdLnhtbFBLAQItABQABgAIAAAAIQA4/SH/1gAA&#10;AJQBAAALAAAAAAAAAAAAAAAAAC8BAABfcmVscy8ucmVsc1BLAQItABQABgAIAAAAIQDg88M+gQIA&#10;ABAFAAAOAAAAAAAAAAAAAAAAAC4CAABkcnMvZTJvRG9jLnhtbFBLAQItABQABgAIAAAAIQC20+4T&#10;3AAAAAgBAAAPAAAAAAAAAAAAAAAAANsEAABkcnMvZG93bnJldi54bWxQSwUGAAAAAAQABADzAAAA&#10;5AUAAAAA&#10;" stroked="f">
                      <v:textbox>
                        <w:txbxContent>
                          <w:p w:rsidR="00944235" w:rsidRDefault="00944235" w:rsidP="00944235">
                            <w:pPr>
                              <w:jc w:val="center"/>
                              <w:rPr>
                                <w:sz w:val="16"/>
                                <w:szCs w:val="16"/>
                              </w:rPr>
                            </w:pPr>
                          </w:p>
                          <w:p w:rsidR="00944235" w:rsidRPr="00652EBC" w:rsidRDefault="00944235" w:rsidP="00944235">
                            <w:pPr>
                              <w:jc w:val="center"/>
                              <w:rPr>
                                <w:sz w:val="16"/>
                                <w:szCs w:val="16"/>
                              </w:rPr>
                            </w:pPr>
                            <w:r w:rsidRPr="00652EBC">
                              <w:rPr>
                                <w:sz w:val="16"/>
                                <w:szCs w:val="16"/>
                              </w:rPr>
                              <w:t>Materai</w:t>
                            </w:r>
                          </w:p>
                          <w:p w:rsidR="00944235" w:rsidRPr="00652EBC" w:rsidRDefault="00944235" w:rsidP="00944235">
                            <w:pPr>
                              <w:jc w:val="center"/>
                              <w:rPr>
                                <w:sz w:val="16"/>
                                <w:szCs w:val="16"/>
                              </w:rPr>
                            </w:pPr>
                            <w:r w:rsidRPr="00652EBC">
                              <w:rPr>
                                <w:sz w:val="16"/>
                                <w:szCs w:val="16"/>
                              </w:rPr>
                              <w:t>6000</w:t>
                            </w:r>
                          </w:p>
                        </w:txbxContent>
                      </v:textbox>
                    </v:shape>
                  </w:pict>
                </mc:Fallback>
              </mc:AlternateContent>
            </w:r>
            <w:r w:rsidR="000543B5" w:rsidRPr="0011145E">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>1</w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>. <xsl:value-of select="aw1_nama"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="0011145E" w:rsidRDefault="000543B5" w:rsidP="0011145E">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="2471"/>
              </w:tabs>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="0011145E">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidRPr="0011145E">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>2</w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>. <xsl:value-of select="aw2_nama"/></w:t>
            </w:r>
            <w:r w:rsidR="00406F90">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t xml:space="preserve"> </w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="000543B5" w:rsidRDefault="007C7451" w:rsidP="0011145E">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="2471"/>
              </w:tabs>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>3. <xsl:value-of select="aw3_nama"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="0059220A" w:rsidRDefault="0059220A" w:rsidP="00406F90">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="2471"/>
              </w:tabs>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="008C48F6" w:rsidRDefault="008C48F6" w:rsidP="0059220A">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="2471"/>
              </w:tabs>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t xml:space="preserve">                                       </w:t>
            </w:r>
            <w:r w:rsidR="0059220A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>4.</w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="aw4_nama"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="0011145E" w:rsidRPr="0011145E" w:rsidRDefault="0059220A" w:rsidP="0059220A">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="2471"/>
              </w:tabs>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidR="0011145E">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr w:rsidR="00406F90" w:rsidRPr="0011145E" w:rsidTr="00947BDE">
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="5167" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00406F90" w:rsidRPr="0011145E" w:rsidRDefault="00406F90" w:rsidP="00947BDE">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="407"/>
              </w:tabs>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="5168" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00406F90" w:rsidRPr="0011145E" w:rsidRDefault="00406F90" w:rsidP="0011145E">
            <w:pPr>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
      </w:tr>
    </w:tbl>
    <w:p w:rsidR="00C10705" w:rsidRPr="0024114A" w:rsidRDefault="00931C3D" w:rsidP="003A5E1F">
      <w:pPr>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:u w:val="single"/>
          <w:lang w:val="fi-FI"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:u w:val="single"/>
          <w:lang w:val="fi-FI"/>
        </w:rPr>
        <w:t>Nama Saksi – S</w:t>
      </w:r>
      <w:r w:rsidR="00C10705" w:rsidRPr="0024114A">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:u w:val="single"/>
          <w:lang w:val="fi-FI"/>
        </w:rPr>
        <w:t>aksi</w:t>
      </w:r>
      <w:r w:rsidR="00B908AA">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:u w:val="single"/>
          <w:lang w:val="fi-FI"/>
        </w:rPr>
        <w:t xml:space="preserve"> :</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00C10705" w:rsidRPr="0024114A" w:rsidRDefault="00C10705" w:rsidP="00C10705">
      <w:pPr>
        <w:ind w:left="180"/>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:u w:val="single"/>
          <w:lang w:val="fi-FI"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:tbl>
      <w:tblPr>
        <w:tblW w:w="10114" w:type="dxa"/>
        <w:tblInd w:w="180" w:type="dxa"/>
        <w:tblLook w:val="04A0" w:firstRow="1" w:lastRow="0" w:firstColumn="1" w:lastColumn="0" w:noHBand="0" w:noVBand="1"/>
      </w:tblPr>
      <w:tblGrid>
        <w:gridCol w:w="4615"/>
        <w:gridCol w:w="5499"/>
      </w:tblGrid>
      <w:tr w:rsidR="00F33577" w:rsidRPr="0024114A" w:rsidTr="0059220A">
        <w:trPr>
          <w:trHeight w:val="763"/>
        </w:trPr>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="4615" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="0044228C" w:rsidRDefault="00337AF3" w:rsidP="00731746">
            <w:pPr>
              <w:numPr>
                <w:ilvl w:val="0"/>
                <w:numId w:val="19"/>
              </w:numPr>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
              <w:t>..................</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00406F90" w:rsidRDefault="00337AF3" w:rsidP="00731746">
            <w:pPr>
              <w:numPr>
                <w:ilvl w:val="0"/>
                <w:numId w:val="19"/>
              </w:numPr>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
              <w:t>..................</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00786622" w:rsidRPr="003A5E1F" w:rsidRDefault="00786622" w:rsidP="005D6E9A">
            <w:pPr>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:ind w:left="426"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="5499" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00F33577" w:rsidRDefault="00F33577" w:rsidP="00731746">
            <w:pPr>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="0024114A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
              <w:t>1</w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
              <w:t>. <xsl:value-of select="saksi_1"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00786622" w:rsidRDefault="00786622" w:rsidP="00731746">
            <w:pPr>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="14"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
              <w:t xml:space="preserve">                 </w:t>
            </w:r>
            <w:r w:rsidR="00731746">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
              <w:t xml:space="preserve">           </w:t>
            </w:r>
            <w:r w:rsidR="00793C24">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
              <w:t xml:space="preserve">    </w:t>
            </w:r>
            <w:r w:rsidR="00265CCF">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
              <w:t xml:space="preserve"> </w:t>
            </w:r>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
              <w:t>2</w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
              <w:t>. <xsl:value-of select="saksi_2"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00793C24" w:rsidRPr="00793C24" w:rsidRDefault="00793C24" w:rsidP="00793C24">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="1925"/>
              </w:tabs>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="fi-FI"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
      </w:tr>
    </w:tbl>
    <w:p w:rsidR="007A5A8F" w:rsidRDefault="007A5A8F" w:rsidP="007A5A8F">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:szCs w:val="20"/>
          <w:u w:val="single"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:tbl>
      <w:tblPr>
        <w:tblW w:w="0" w:type="auto"/>
        <w:tblLook w:val="04A0" w:firstRow="1" w:lastRow="0" w:firstColumn="1" w:lastColumn="0" w:noHBand="0" w:noVBand="1"/>
      </w:tblPr>
      <w:tblGrid>
        <w:gridCol w:w="5159"/>
        <w:gridCol w:w="5160"/>
      </w:tblGrid>
      <w:tr w:rsidR="00731746" w:rsidRPr="00FF0D7B" w:rsidTr="008C48F6">
        <w:trPr>
          <w:trHeight w:val="1610"/>
        </w:trPr>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="5159" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00731746" w:rsidRPr="00FF0D7B" w:rsidRDefault="00731746" w:rsidP="00FF0D7B">
            <w:pPr>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00FF0D7B">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>KEPALA DUSUN/DUKUH/KAMPUNG</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00731746" w:rsidRPr="00FF0D7B" w:rsidRDefault="007C7451" w:rsidP="00FF0D7B">
            <w:pPr>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_kl_jabatan"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00731746" w:rsidRDefault="00731746" w:rsidP="00FF0D7B">
            <w:pPr>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00E46681" w:rsidRPr="00FF0D7B" w:rsidRDefault="00E46681" w:rsidP="00FF0D7B">
            <w:pPr>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00731746" w:rsidRPr="00FF0D7B" w:rsidRDefault="00731746" w:rsidP="00E46681">
            <w:pPr>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00731746" w:rsidRDefault="007C7451" w:rsidP="00FF0D7B">
            <w:pPr>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_kl_nama"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="007C7451" w:rsidRPr="00FF0D7B" w:rsidRDefault="007C7451" w:rsidP="00FF0D7B">
            <w:pPr>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>NIP. <xsl:value-of select="ttd_kl_nip"/></w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="5160" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00731746" w:rsidRPr="00FF0D7B" w:rsidRDefault="007C7451" w:rsidP="00FF0D7B">
            <w:pPr>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="nama_kel"/>, <xsl:value-of select="tanggal_surat"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00731746" w:rsidRPr="00613507" w:rsidRDefault="007C7451" w:rsidP="00FF0D7B">
            <w:pPr>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00731746" w:rsidRPr="00FF0D7B" w:rsidRDefault="00731746" w:rsidP="00FF0D7B">
            <w:pPr>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00731746" w:rsidRPr="00FF0D7B" w:rsidRDefault="00731746" w:rsidP="00FF0D7B">
            <w:pPr>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00731746" w:rsidRDefault="00731746" w:rsidP="00E46681">
            <w:pPr>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00E46681" w:rsidRPr="00FF0D7B" w:rsidRDefault="00E46681" w:rsidP="00E46681">
            <w:pPr>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00731746" w:rsidRPr="00FF0D7B" w:rsidRDefault="007C7451" w:rsidP="00FF0D7B">
            <w:pPr>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_nama"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00731746" w:rsidRPr="00947BDE" w:rsidRDefault="00731746" w:rsidP="007C7451">
            <w:pPr>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00947BDE">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>NIP.</w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_nip"/></w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
    </w:tbl>
    <w:tbl>
      <w:tblPr>
        <w:tblpPr w:leftFromText="180" w:rightFromText="180" w:vertAnchor="text" w:horzAnchor="margin" w:tblpXSpec="center" w:tblpY="113"/>
        <w:tblW w:w="0" w:type="auto"/>
        <w:tblLook w:val="04A0" w:firstRow="1" w:lastRow="0" w:firstColumn="1" w:lastColumn="0" w:noHBand="0" w:noVBand="1"/>
      </w:tblPr>
      <w:tblGrid>
        <w:gridCol w:w="9833"/>
      </w:tblGrid>
      <w:tr w:rsidR="008C48F6" w:rsidRPr="0024114A" w:rsidTr="008C48F6">
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="9833" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="008C48F6" w:rsidRPr="0024114A" w:rsidRDefault="008C48F6" w:rsidP="008C48F6">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="2903"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="0024114A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidRPr="0024114A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidRPr="0024114A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidRPr="0024114A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
              <w:t>No. Reg</w:t>
            </w:r>
            <w:r w:rsidRPr="0024114A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
              <w:t>:</w:t>
            </w:r>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t xml:space="preserve"> </w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="nomor_registrasi"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="008C48F6" w:rsidRPr="0024114A" w:rsidRDefault="008C48F6" w:rsidP="008C48F6">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="2880"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="0024114A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidRPr="0024114A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidRPr="0024114A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidRPr="0024114A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
              <w:t>Tanggal</w:t>
            </w:r>
            <w:r w:rsidRPr="0024114A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
              <w:t>:</w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="tanggal_registrasi"/></w:t>
            </w:r>
            <w:r w:rsidRPr="0024114A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
          </w:p>
          <w:p w:rsidR="008C48F6" w:rsidRPr="0024114A" w:rsidRDefault="008C48F6" w:rsidP="008C48F6">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="0024114A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>Mengetahui :</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="008C48F6" w:rsidRPr="00265CCF" w:rsidRDefault="008C48F6" w:rsidP="008C48F6">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="8"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="008C48F6" w:rsidRPr="0024114A" w:rsidRDefault="008C48F6" w:rsidP="008C48F6">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="0024114A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>CAMAT LEGOK</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="008C48F6" w:rsidRPr="0024114A" w:rsidRDefault="008C48F6" w:rsidP="008C48F6">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="008C48F6" w:rsidRPr="0024114A" w:rsidRDefault="008C48F6" w:rsidP="008C48F6">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="008C48F6" w:rsidRPr="0024114A" w:rsidRDefault="007C7451" w:rsidP="008C48F6">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="nama_camat"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="008C48F6" w:rsidRDefault="008C48F6" w:rsidP="008C48F6">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>NIP.</w:t>
            </w:r>
            <w:r w:rsidR="007C7451">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="nip_camat"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="008C48F6" w:rsidRPr="0024114A" w:rsidRDefault="008C48F6" w:rsidP="008C48F6">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="20"/>
                <w:szCs w:val="20"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
      </w:tr>
    </w:tbl>
    <w:p w:rsidR="00947BDE" w:rsidRDefault="00947BDE" w:rsidP="00E16565">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:sectPr w:rsidR="00947BDE" w:rsidSect="009853C6">
      <w:headerReference w:type="default" r:id="rId9"/>
      <w:pgSz w:w="12242" w:h="18722" w:code="178"/>
      <w:pgMar w:top="417" w:right="902" w:bottom="360" w:left="1080" w:header="284" w:footer="709" w:gutter="0"/>
      <w:cols w:space="720"/>
      <w:docGrid w:linePitch="360"/>
    </w:sectPr>

</xsl:for-each>
  </w:body>
</w:document>
</xsl:template>
</xsl:stylesheet>
