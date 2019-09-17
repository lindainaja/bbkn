<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:template match="/">
  <w:document xmlns:ve="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:wp="http://schemas.openxmlformats.org/drawingml/2006/wordprocessingDrawing" xmlns:w10="urn:schemas-microsoft-com:office:word" xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main" xmlns:wne="http://schemas.microsoft.com/office/word/2006/wordml">
   <w:body>
    	<xsl:for-each select="root/row">
    <w:p w:rsidR="00E80B49" w:rsidRPr="002021AB" w:rsidRDefault="0077067B" w:rsidP="00E80B49">
     <w:pPr>
      <w:pStyle w:val="Heading1"/>
      <w:ind w:right="77"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="26"/>
       <w:u w:val="single"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="28"/>
       <w:u w:val="single"/>
      </w:rPr>
      <w:t>SURAT</w:t>
     </w:r>
     <w:r w:rsidR="00E80B49" w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="28"/>
       <w:u w:val="single"/>
      </w:rPr>
      <w:t>KETERANGAN</w:t>
     </w:r>
     <w:r w:rsidR="002021AB">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="28"/>
       <w:u w:val="single"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> BELUM MENIKAH</w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00E80B49" w:rsidRPr="006C5DF4" w:rsidRDefault="00E80B49" w:rsidP="00E80B49">
     <w:pPr>
      <w:ind w:right="77"/>
      <w:jc w:val="center"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="22"/>
       <w:szCs w:val="22"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="id-ID"/>
      </w:rPr>
      <w:t xml:space="preserve">Nomor : </w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="12"/>
       <w:lang w:val="id-ID"/>
      </w:rPr>
      <w:t xml:space="preserve">. </w:t>
     </w:r>
     <w:r w:rsidR="006C5DF4">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="22"/>
       <w:szCs w:val="22"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="no"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00E80B49" w:rsidRPr="00B11FD0" w:rsidRDefault="00E80B49" w:rsidP="00E80B49">
     <w:pPr>
      <w:ind w:right="77"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="22"/>
       <w:szCs w:val="22"/>
       <w:lang w:val="id-ID"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00E80B49" w:rsidRPr="00B11FD0" w:rsidRDefault="00E80B49" w:rsidP="00E80B49">
     <w:pPr>
      <w:ind w:right="77"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="12"/>
       <w:lang w:val="id-ID"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00E80B49" w:rsidRPr="00B11FD0" w:rsidRDefault="00E80B49" w:rsidP="00E80B49">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>Yang bertanda tangan dibawah ini :</w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00C95477" w:rsidRPr="00B11FD0" w:rsidRDefault="00C95477" w:rsidP="00C95477">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3686"/>
       <w:tab w:val="left" w:pos="3828"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>N a m a</w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r w:rsidR="00B25A32">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="006C5DF4">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t><xsl:value-of select="ttd_nama"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00C95477" w:rsidRPr="00B11FD0" w:rsidRDefault="00C95477" w:rsidP="00C95477">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3686"/>
       <w:tab w:val="left" w:pos="3828"/>
       <w:tab w:val="left" w:pos="7007"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>N I P</w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r w:rsidR="006C5DF4">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t><xsl:value-of select="ttd_nip"/></w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
     </w:r>
    </w:p>
    <w:p w:rsidR="00C95477" w:rsidRPr="00B11FD0" w:rsidRDefault="00C95477" w:rsidP="00C95477">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3686"/>
       <w:tab w:val="left" w:pos="3828"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="12"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>J a b a t a n</w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r w:rsidR="00B25A32">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="006C5DF4">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
      </w:rPr>
      <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00E80B49" w:rsidRPr="00B11FD0" w:rsidRDefault="00E80B49" w:rsidP="00E80B49">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve"> Menerangkan dengan sebenarnya bahwa :</w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00E80B49" w:rsidRPr="00B11FD0" w:rsidRDefault="00E80B49" w:rsidP="00E80B49">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="8"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00B622DE" w:rsidRPr="00B11FD0" w:rsidRDefault="00B622DE" w:rsidP="00B622DE">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3686"/>
       <w:tab w:val="left" w:pos="3828"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>N a m a</w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
      <w:t xml:space="preserve">: </w:t>
     </w:r>
     <w:r w:rsidR="00B25A32">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="006C5DF4">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t><xsl:value-of select="nama"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00B622DE" w:rsidRPr="00B11FD0" w:rsidRDefault="00B622DE" w:rsidP="00B622DE">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3686"/>
       <w:tab w:val="left" w:pos="3828"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>Jenis Kelamin</w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
      <w:t xml:space="preserve">:  </w:t>
     </w:r>
     <w:r w:rsidR="006C5DF4">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t><xsl:value-of select="jenis_kelamin"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00B622DE" w:rsidRDefault="00B622DE" w:rsidP="00B622DE">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3686"/>
       <w:tab w:val="left" w:pos="3828"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>Tempat/ Tanggal Lahir</w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r w:rsidR="006C5DF4">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t><xsl:value-of select="ttl"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00B622DE" w:rsidRPr="00B11FD0" w:rsidRDefault="00B622DE" w:rsidP="00B622DE">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3686"/>
       <w:tab w:val="left" w:pos="3828"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>A g a m a</w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r w:rsidR="006C5DF4">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t><xsl:value-of select="agama"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00B622DE" w:rsidRPr="00B11FD0" w:rsidRDefault="00B622DE" w:rsidP="00B622DE">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3686"/>
       <w:tab w:val="left" w:pos="3828"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>Pekerjaan</w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r w:rsidR="006C5DF4">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t><xsl:value-of select="pekerjaan"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00B622DE" w:rsidRPr="00B11FD0" w:rsidRDefault="00B622DE" w:rsidP="00B622DE">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3686"/>
       <w:tab w:val="left" w:pos="3828"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>A l a m a t</w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
      <w:t xml:space="preserve">:  </w:t>
     </w:r>
     <w:r w:rsidR="006C5DF4">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t><xsl:value-of select="alamat"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00B622DE" w:rsidRDefault="00B622DE" w:rsidP="00B622DE">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3686"/>
       <w:tab w:val="left" w:pos="3828"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve">Nomor </w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>NIK</w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r w:rsidR="006C5DF4">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t><xsl:value-of select="nik"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="0077067B" w:rsidRPr="00B11FD0" w:rsidRDefault="0077067B" w:rsidP="00B622DE">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3686"/>
       <w:tab w:val="left" w:pos="3828"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00E80B49" w:rsidRPr="00B11FD0" w:rsidRDefault="006159D3" w:rsidP="00AA7F1B">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3686"/>
       <w:tab w:val="left" w:pos="3828"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve">Yang tersebut namanya diatas, </w:t>
     </w:r>
     <w:r w:rsidR="00E80B49" w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>sampai saat dibuatnya su</w:t>
     </w:r>
     <w:r w:rsidR="00497DCB">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve">rat keterangan ini benar </w:t>
     </w:r>
     <w:r w:rsidR="007E7387">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>belum pernah kawin/Menikah</w:t>
     </w:r>
     <w:r w:rsidR="00AA7F1B">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>.</w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00E80B49" w:rsidRPr="00B11FD0" w:rsidRDefault="00E80B49" w:rsidP="00E80B49">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:jc w:val="both"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:tab/>
      <w:t xml:space="preserve">Demikian surat keterangan ini dibuat dengan sebenarnya untuk </w:t>
     </w:r>
     <w:r w:rsidR="009703F8">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve">digunakan </w:t>
     </w:r>
     <w:r w:rsidR="007E7387">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>seperlunya, dan apabila dikemudian hari terdapat kekeliruan didalamnya, akan diadakan perbaikan sebagaimana mestinya</w:t>
     </w:r>
     <w:r w:rsidRPr="00B11FD0">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>.</w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00E80B49" w:rsidRPr="00B11FD0" w:rsidRDefault="00E80B49" w:rsidP="00E80B49">
     <w:pPr>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:jc w:val="both"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00E80B49" w:rsidRPr="00B11FD0" w:rsidRDefault="00E80B49" w:rsidP="00E80B49">
     <w:pPr>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:jc w:val="both"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:tbl>
     <w:tblPr>
      <w:tblW w:w="10077" w:type="dxa"/>
      <w:tblLook w:val="04A0"/>
     </w:tblPr>
     <w:tblGrid>
      <w:gridCol w:w="5070"/>
      <w:gridCol w:w="5007"/>
     </w:tblGrid>
     <w:tr w:rsidR="00E80B49" w:rsidRPr="00B11FD0" w:rsidTr="00AF4D87">
      <w:tc>
       <w:tcPr>
        <w:tcW w:w="5070" w:type="dxa"/>
       </w:tcPr>
       <w:p w:rsidR="00E80B49" w:rsidRPr="00B11FD0" w:rsidRDefault="00E80B49" w:rsidP="00AF4D87">
        <w:pPr>
         <w:spacing w:line="276" w:lineRule="auto"/>
         <w:jc w:val="both"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
         </w:rPr>
        </w:pPr>
        <w:r w:rsidRPr="00B11FD0">
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
         </w:rPr>
         <w:tab/>
        </w:r>
       </w:p>
      </w:tc>
      <w:tc>
       <w:tcPr>
        <w:tcW w:w="5007" w:type="dxa"/>
       </w:tcPr>
       <w:p w:rsidR="00E80B49" w:rsidRDefault="006C5DF4" w:rsidP="00083007">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="884"/>
          <w:tab w:val="left" w:pos="1309"/>
         </w:tabs>
         <w:spacing w:line="276" w:lineRule="auto"/>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
         </w:rPr>
        </w:pPr>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
         </w:rPr>
         <w:t><xsl:value-of select="nama_kec"/>, <xsl:value-of select="tanggal_surat"/></w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00700716" w:rsidRPr="00700716" w:rsidRDefault="00700716" w:rsidP="00E028E3">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="884"/>
          <w:tab w:val="left" w:pos="1451"/>
         </w:tabs>
         <w:spacing w:line="276" w:lineRule="auto"/>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="10"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00C95477" w:rsidRPr="00B265C4" w:rsidRDefault="006C5DF4" w:rsidP="004D7131">
        <w:pPr>
         <w:pStyle w:val="NoSpacing"/>
         <w:tabs>
          <w:tab w:val="left" w:pos="884"/>
          <w:tab w:val="left" w:pos="1451"/>
         </w:tabs>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:szCs w:val="24"/>
          <w:lang w:val="sv-SE"/>
         </w:rPr>
        </w:pPr>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:szCs w:val="24"/>
          <w:lang w:val="sv-SE"/>
         </w:rPr>
         <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
        </w:r>
        <w:bookmarkStart w:id="0" w:name="_GoBack"/>
        <w:bookmarkEnd w:id="0"/>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:szCs w:val="24"/>
          <w:lang w:val="sv-SE"/>
         </w:rPr>
         <w:t></w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00C95477" w:rsidRPr="00B265C4" w:rsidRDefault="00C95477" w:rsidP="00E028E3">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="884"/>
          <w:tab w:val="left" w:pos="1316"/>
          <w:tab w:val="left" w:pos="1451"/>
         </w:tabs>
         <w:ind w:right="79"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00C95477" w:rsidRPr="002D05BD" w:rsidRDefault="00C95477" w:rsidP="0077067B">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="884"/>
          <w:tab w:val="left" w:pos="1451"/>
         </w:tabs>
         <w:ind w:right="79"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="14"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00C95477" w:rsidRDefault="00C95477" w:rsidP="006031BC">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="884"/>
          <w:tab w:val="left" w:pos="1451"/>
         </w:tabs>
         <w:ind w:right="79"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="006031BC" w:rsidRDefault="006031BC" w:rsidP="006031BC">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="884"/>
          <w:tab w:val="left" w:pos="1451"/>
         </w:tabs>
         <w:ind w:right="79"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="004D7131" w:rsidRDefault="006C5DF4" w:rsidP="004D7131">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="884"/>
          <w:tab w:val="left" w:pos="1451"/>
         </w:tabs>
         <w:ind w:right="79"/>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
         </w:rPr>
        </w:pPr>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="pt-BR"/>
         </w:rPr>
         <w:t><xsl:value-of select="ttd_nama"/></w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00E80B49" w:rsidRPr="00700716" w:rsidRDefault="00C95477" w:rsidP="004D7131">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="884"/>
          <w:tab w:val="left" w:pos="1451"/>
         </w:tabs>
         <w:ind w:right="79"/>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
         </w:rPr>
        </w:pPr>
        <w:r w:rsidRPr="00032C4E">
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
         </w:rPr>
         <w:t>NIP</w:t>
        </w:r>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
         </w:rPr>
         <w:t>.</w:t>
        </w:r>
        <w:r w:rsidR="00AE30BA">
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
         </w:rPr>
         <w:t><xsl:value-of select="ttd_nip"/></w:t>
        </w:r>
        <w:r w:rsidR="006C5DF4">
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
         </w:rPr>
         <w:t></w:t>
        </w:r>
       </w:p>
      </w:tc>
     </w:tr>
     <w:tr w:rsidR="006031BC" w:rsidRPr="00B11FD0" w:rsidTr="00AF4D87">
      <w:tc>
       <w:tcPr>
        <w:tcW w:w="5070" w:type="dxa"/>
       </w:tcPr>
       <w:p w:rsidR="006031BC" w:rsidRPr="00B11FD0" w:rsidRDefault="006031BC" w:rsidP="00AF4D87">
        <w:pPr>
         <w:spacing w:line="276" w:lineRule="auto"/>
         <w:jc w:val="both"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
         </w:rPr>
        </w:pPr>
       </w:p>
      </w:tc>
      <w:tc>
       <w:tcPr>
        <w:tcW w:w="5007" w:type="dxa"/>
       </w:tcPr>
       <w:p w:rsidR="006031BC" w:rsidRDefault="006031BC" w:rsidP="00E028E3">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="884"/>
          <w:tab w:val="left" w:pos="1451"/>
         </w:tabs>
         <w:spacing w:line="276" w:lineRule="auto"/>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
         </w:rPr>
        </w:pPr>
       </w:p>
      </w:tc>
     </w:tr>
    </w:tbl>
    <w:p w:rsidR="00E80B49" w:rsidRDefault="00E80B49" w:rsidP="00E80B49">
     <w:pPr>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:jc w:val="both"/>
      <w:rPr>
       <w:rFonts w:ascii="Book Antiqua" w:hAnsi="Book Antiqua"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00E80B49" w:rsidRPr="00C80FB1" w:rsidRDefault="00E80B49" w:rsidP="00E80B49">
     <w:pPr>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:jc w:val="both"/>
      <w:rPr>
       <w:rFonts w:ascii="Book Antiqua" w:hAnsi="Book Antiqua"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00E80B49" w:rsidRDefault="00E80B49" w:rsidP="00E80B49">
     <w:pPr>
      <w:spacing w:line="480" w:lineRule="auto"/>
      <w:rPr>
       <w:lang w:val="id-ID"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Book Antiqua" w:hAnsi="Book Antiqua"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Book Antiqua" w:hAnsi="Book Antiqua"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Book Antiqua" w:hAnsi="Book Antiqua"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Book Antiqua" w:hAnsi="Book Antiqua"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Book Antiqua" w:hAnsi="Book Antiqua"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Book Antiqua" w:hAnsi="Book Antiqua"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Book Antiqua" w:hAnsi="Book Antiqua"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Book Antiqua" w:hAnsi="Book Antiqua"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Book Antiqua" w:hAnsi="Book Antiqua"/>
      </w:rPr>
      <w:tab/>
     </w:r>
    </w:p>
    <w:p w:rsidR="00E80B49" w:rsidRDefault="00E80B49" w:rsidP="00E80B49">
     <w:pPr>
      <w:pStyle w:val="Title"/>
      <w:ind w:left="4680" w:right="77" w:hanging="3420"/>
      <w:rPr>
       <w:rFonts w:ascii="Copperplate Gothic Bold" w:hAnsi="Copperplate Gothic Bold"/>
       <w:b/>
       <w:sz w:val="34"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="006159D3" w:rsidRDefault="006159D3" w:rsidP="00E80B49">
     <w:pPr>
      <w:pStyle w:val="Title"/>
      <w:ind w:left="4680" w:right="77" w:hanging="3420"/>
      <w:rPr>
       <w:rFonts w:ascii="Copperplate Gothic Bold" w:hAnsi="Copperplate Gothic Bold"/>
       <w:b/>
       <w:sz w:val="34"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00E80B49" w:rsidRDefault="00E80B49" w:rsidP="00E80B49">
     <w:pPr>
      <w:pStyle w:val="Title"/>
      <w:ind w:left="4680" w:right="77" w:hanging="3420"/>
      <w:rPr>
       <w:rFonts w:ascii="Copperplate Gothic Bold" w:hAnsi="Copperplate Gothic Bold"/>
       <w:b/>
       <w:sz w:val="34"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00E80B49" w:rsidRDefault="00E80B49" w:rsidP="00DF7E15">
     <w:pPr>
      <w:pStyle w:val="Title"/>
      <w:ind w:left="0" w:right="77"/>
      <w:jc w:val="left"/>
      <w:rPr>
       <w:rFonts w:ascii="Copperplate Gothic Bold" w:hAnsi="Copperplate Gothic Bold"/>
       <w:b/>
       <w:sz w:val="34"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="0081361B" w:rsidRDefault="000D330C" w:rsidP="000D330C">
     <w:pPr>
      <w:pStyle w:val="Title"/>
      <w:tabs>
       <w:tab w:val="left" w:pos="5584"/>
      </w:tabs>
      <w:ind w:left="0" w:right="77"/>
      <w:jc w:val="left"/>
      <w:rPr>
       <w:rFonts w:ascii="Copperplate Gothic Bold" w:hAnsi="Copperplate Gothic Bold"/>
       <w:b/>
       <w:sz w:val="34"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Copperplate Gothic Bold" w:hAnsi="Copperplate Gothic Bold"/>
       <w:b/>
       <w:sz w:val="34"/>
      </w:rPr>
      <w:tab/>
     </w:r>
    </w:p>
    <w:p w:rsidR="000D330C" w:rsidRDefault="000D330C" w:rsidP="000D330C">
     <w:pPr>
      <w:pStyle w:val="Title"/>
      <w:tabs>
       <w:tab w:val="left" w:pos="5584"/>
      </w:tabs>
      <w:ind w:left="0" w:right="77"/>
      <w:jc w:val="left"/>
      <w:rPr>
       <w:rFonts w:ascii="Copperplate Gothic Bold" w:hAnsi="Copperplate Gothic Bold"/>
       <w:b/>
       <w:sz w:val="34"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:sectPr w:rsidR="000D330C" w:rsidSect="0014539D">
     <w:headerReference w:type="default" r:id="rId8"/>
     <w:pgSz w:w="12191" w:h="18711" w:code="9"/>
     <w:pgMar w:top="719" w:right="1134" w:bottom="397" w:left="1260" w:header="709" w:footer="709" w:gutter="0"/>
     <w:cols w:space="708"/>
     <w:docGrid w:linePitch="360"/>
    </w:sectPr>
    	</xsl:for-each>
   </w:body>
  </w:document>
 </xsl:template>
</xsl:stylesheet>
