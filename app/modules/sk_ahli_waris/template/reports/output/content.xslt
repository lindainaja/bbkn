<?xml version="1.0" encoding="UTF-8" standalone="yes"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<w:document xmlns:wpc="http://schemas.microsoft.com/office/word/2010/wordprocessingCanvas" xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:wp14="http://schemas.microsoft.com/office/word/2010/wordprocessingDrawing" xmlns:wp="http://schemas.openxmlformats.org/drawingml/2006/wordprocessingDrawing" xmlns:w10="urn:schemas-microsoft-com:office:word" xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main" xmlns:w14="http://schemas.microsoft.com/office/word/2010/wordml" xmlns:wpg="http://schemas.microsoft.com/office/word/2010/wordprocessingGroup" xmlns:wpi="http://schemas.microsoft.com/office/word/2010/wordprocessingInk" xmlns:wne="http://schemas.microsoft.com/office/word/2006/wordml" xmlns:wps="http://schemas.microsoft.com/office/word/2010/wordprocessingShape" mc:Ignorable="w14 wp14">
  <w:body>

<xsl:for-each select="root/row">
    <w:p w:rsidR="00095694" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="28"/>
          <w:u w:val="single"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="28"/>
          <w:u w:val="single"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>SURAT KETERANGAN AHLI WARIS</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRDefault="0075192D" w:rsidP="00095694">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">Nomor : </w:t>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="no"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>Yang bertanda tangan dibawah ini  :</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>N a m a</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_nama"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>N I P</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_nip"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>J a b a t a n</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">:   </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>Menerangkan dengan sebenarnya bahwa  :</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>N a m a</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="nama"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>Jenis Kelamin</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="jenis_kelamin"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>Tempat / Tgl. Lahir</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttl"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>Status Perkawinan</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="status_perkawinan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>Pekerjaan</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="pekerjaan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>A g a m a</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="agama"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>A l a m a t</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="alamat"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">Yang tersebut namanya diatas adalah benar </w:t>
      </w:r>
      <w:r w:rsidR="0075192D">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>Istri</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>da</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>ri Almarhum</w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="nama_almarhum"/></w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">yang Meninggal Dunia pada Hari </w:t>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="hari_meninggal"/></w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">Tanggal </w:t>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="tanggal_meninggal"/></w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>di Babakan</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t></w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">, dengan Nomor Surat Kematian : </w:t>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="no_surat_kematian"/></w:t>
      </w:r>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> dan sekalig</w:t>
      </w:r>
      <w:r w:rsidR="00777907">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">us menjadi Ahli Waris Dengan Nomor </w:t>
      </w:r>
      <w:r w:rsidR="00362D22">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="no_ahli_waris"/>.</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004049B9">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>Demikian surat keterangan ini kami buat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3870"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
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
        <w:gridCol w:w="4931"/>
        <w:gridCol w:w="4924"/>
      </w:tblGrid>
      <w:tr w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidTr="00C80987">
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="5058" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00095694" w:rsidRDefault="00095694" w:rsidP="00C80987">
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
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00C80987">
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
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>KEPALA DUSUN/DUKUH/KAMPUNG</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00362D22" w:rsidP="00C80987">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_kl_jabatan"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00C80987">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00C80987">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRDefault="00362D22" w:rsidP="00C80987">
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
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_kl_nama"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00362D22" w:rsidRPr="00FC2495" w:rsidRDefault="00362D22" w:rsidP="00C80987">
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
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>NIP. <xsl:value-of select="ttd_kl_nip"/></w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="5058" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00095694" w:rsidRDefault="00095694" w:rsidP="00C80987">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00362D22" w:rsidP="00C80987">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="nama_kel"/></w:t>
            </w:r>
            <w:r w:rsidR="00095694" w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>,</w:t>
            </w:r>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="tanggal_surat"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00362D22" w:rsidP="00C80987">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="00BE05E3" w:rsidRDefault="00095694" w:rsidP="00C80987">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00C80987">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="00E15718" w:rsidRDefault="00362D22" w:rsidP="00C80987">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_nama"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00362D22">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1321"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>NIP.</w:t>
            </w:r>
            <w:r w:rsidR="00362D22">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_nip"/></w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
    </w:tbl>
    <w:p w:rsidR="00095694" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:u w:val="single"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00095694">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:u w:val="single"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:tbl>
      <w:tblPr>
        <w:tblW w:w="9833" w:type="dxa"/>
        <w:tblInd w:w="360" w:type="dxa"/>
        <w:tblLook w:val="04A0" w:firstRow="1" w:lastRow="0" w:firstColumn="1" w:lastColumn="0" w:noHBand="0" w:noVBand="1"/>
      </w:tblPr>
      <w:tblGrid>
        <w:gridCol w:w="9833"/>
      </w:tblGrid>
      <w:tr w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidTr="00C80987">
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="9833" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00C80987">
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
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
              <w:t>No. Reg</w:t>
            </w:r>
            <w:r w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
              <w:t>:</w:t>
            </w:r>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t xml:space="preserve"> </w:t>
            </w:r>
            <w:r w:rsidR="00362D22">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="nomor_registrasi"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00C80987">
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
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
              <w:t>Tanggal</w:t>
            </w:r>
            <w:r w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
              <w:t>:</w:t>
            </w:r>
            <w:r w:rsidR="00362D22">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t xml:space="preserve"> <xsl:value-of select="tanggal_registrasi"/></w:t>
            </w:r>
            <w:r w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00C80987">
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
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>Mengetahui :</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="00EA2932" w:rsidRDefault="00095694" w:rsidP="00C80987">
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
                <w:sz w:val="10"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00C80987">
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
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t>CAMAT LEGOK</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00C80987">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00C80987">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00C80987">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="3600"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00C80987">
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
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:softHyphen/>
            </w:r>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:softHyphen/>
            </w:r>
            <w:r w:rsidR="00362D22">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:u w:val="single"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="nama_camat"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00095694" w:rsidRPr="004049B9" w:rsidRDefault="00095694" w:rsidP="00C80987">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="720"/>
                <w:tab w:val="left" w:pos="1350"/>
                <w:tab w:val="left" w:pos="1593"/>
                <w:tab w:val="left" w:pos="3609"/>
                <w:tab w:val="left" w:pos="3870"/>
              </w:tabs>
              <w:spacing w:line="276" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidRPr="004049B9">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t xml:space="preserve">NIP : </w:t>
            </w:r>
            <w:r w:rsidR="00362D22">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="22"/>
                <w:szCs w:val="22"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
              <w:t><xsl:value-of select="nip_camat"/></w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
    </w:tbl>
    <w:p w:rsidR="00095694" w:rsidRDefault="00095694" w:rsidP="00E13112">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="28"/>
          <w:u w:val="single"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRDefault="00095694" w:rsidP="00C23BED">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="28"/>
          <w:u w:val="single"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:bookmarkStart w:id="0" w:name="_GoBack"/>
      <w:bookmarkEnd w:id="0"/>
    </w:p>
    <w:p w:rsidR="00095694" w:rsidRDefault="00095694" w:rsidP="00FE4B43">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="28"/>
          <w:u w:val="single"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:sectPr w:rsidR="00095694" w:rsidSect="008D08B6">
      <w:headerReference w:type="default" r:id="rId9"/>
      <w:pgSz w:w="12242" w:h="18722" w:code="178"/>
      <w:pgMar w:top="360" w:right="1327" w:bottom="567" w:left="1276" w:header="345" w:footer="709" w:gutter="0"/>
      <w:cols w:space="720"/>
      <w:docGrid w:linePitch="360"/>
    </w:sectPr>

</xsl:for-each>
  </w:body>
</w:document>
</xsl:template>
</xsl:stylesheet>
