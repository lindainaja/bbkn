<?xml version="1.0" encoding="UTF-8" standalone="yes"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<w:document xmlns:wpc="http://schemas.microsoft.com/office/word/2010/wordprocessingCanvas" xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:wp14="http://schemas.microsoft.com/office/word/2010/wordprocessingDrawing" xmlns:wp="http://schemas.openxmlformats.org/drawingml/2006/wordprocessingDrawing" xmlns:w10="urn:schemas-microsoft-com:office:word" xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main" xmlns:w14="http://schemas.microsoft.com/office/word/2010/wordml" xmlns:wpg="http://schemas.microsoft.com/office/word/2010/wordprocessingGroup" xmlns:wpi="http://schemas.microsoft.com/office/word/2010/wordprocessingInk" xmlns:wne="http://schemas.microsoft.com/office/word/2006/wordml" xmlns:wps="http://schemas.microsoft.com/office/word/2010/wordprocessingShape" mc:Ignorable="w14 wp14">
  <w:body>

<xsl:for-each select="root/row">
    <w:p w:rsidR="00A81095" w:rsidRPr="005C77C3" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Tahoma" w:hAnsi="Tahoma" w:cs="Tahoma"/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:u w:val="single"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="26"/>
          <w:u w:val="single"/>
        </w:rPr>
        <w:t>SURAT KETERANGAN</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="001D03CF" w:rsidRDefault="00A81095" w:rsidP="00561583">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:szCs w:val="22"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00162774">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">Nomor :  </w:t>
      </w:r>
      <w:r w:rsidR="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:szCs w:val="22"/>
        </w:rPr>
        <w:t><xsl:value-of select="no"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>Yang bertanda tangan dibawah ini :</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:sz w:val="14"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="720"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t>N a m a</w:t>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">:   </w:t>
      </w:r>
      <w:r w:rsidR="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_nama"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="005405C5" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="720"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t>N I P</w:t>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">:   </w:t>
      </w:r>
      <w:r w:rsidR="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_nip"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="720"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t>J</w:t>
      </w:r>
      <w:r w:rsidR="005405C5" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t xml:space="preserve"> a b</w:t>
      </w:r>
      <w:r w:rsidR="0015317F" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t xml:space="preserve"> a t a n</w:t>
      </w:r>
      <w:r w:rsidR="0015317F" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="0015317F" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="0015317F" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">:   </w:t>
      </w:r>
      <w:r w:rsidR="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:sz w:val="10"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t>Menerangkan dengan sebenarnya bahwa :</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="002C166F">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">N a m a   </w:t>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">            : </w:t>
      </w:r>
      <w:r w:rsidR="007B4AC3" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">  </w:t>
      </w:r>
      <w:r w:rsidR="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="nama"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="001C53B3">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>Tempat/Tgl. Lahir</w:t>
      </w:r>
      <w:r w:rsidR="005C77C3" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">: </w:t>
      </w:r>
      <w:r w:rsidR="00E75549" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="007B4AC3" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttl"/></w:t>
      </w:r>
      <w:r w:rsidR="001C53B3">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">   </w:t>
      </w:r>
      <w:r w:rsidR="00F73DA4" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00162774" w:rsidRDefault="00162774" w:rsidP="00162774">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>Jenis kelamin</w:t>
      </w:r>
      <w:r w:rsidR="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="00A81095" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">: </w:t>
      </w:r>
      <w:r w:rsidR="007B4AC3" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">  </w:t>
      </w:r>
      <w:r w:rsidR="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="jenis_kelamin
"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00162774" w:rsidP="00162774">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00A81095" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>Status Perkawinan</w:t>
      </w:r>
      <w:r w:rsidR="00A81095" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00A81095" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="00A81095" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">:  </w:t>
      </w:r>
      <w:r w:rsidR="007B4AC3" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="status_perkawinan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00C51F7C" w:rsidP="00A81095">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>Pekerjaan</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">            </w:t>
      </w:r>
      <w:r w:rsidR="00A81095" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">: </w:t>
      </w:r>
      <w:r w:rsidR="007B4AC3" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="00E75549" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="pekerjaan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">      </w:t>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">A l a m </w:t>
      </w:r>
      <w:r w:rsidR="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">a t                           </w:t>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> :  </w:t>
      </w:r>
      <w:r w:rsidR="00162774">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="alamat"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00C51F7C" w:rsidRPr="00C51F7C" w:rsidRDefault="00C51F7C" w:rsidP="00A81095">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="005C77C3" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3544"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">Yang tersebut namanya diatas adalah benar telah mengalami Musibah / Bencana Kebakaran </w:t>
      </w:r>
      <w:r w:rsidR="00162774">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">di </w:t>
      </w:r>
      <w:r w:rsidR="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="lokasi"/></w:t>
      </w:r>
      <w:r w:rsidR="00E41F78">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> Pada Tanggal </w:t>
      </w:r>
      <w:r w:rsidR="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="tanggal_kebakaran"/></w:t>
      </w:r>
      <w:r w:rsidR="00162774">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="005C77C3" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>dan</w:t>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t xml:space="preserve"> menghanguskan </w:t>
      </w:r>
      <w:r w:rsidR="00542C0B" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="005C77C3" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t>:</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00187652" w:rsidRDefault="001D03CF" w:rsidP="001D03CF">
      <w:pPr>
        <w:numPr>
          <w:ilvl w:val="0"/>
          <w:numId w:val="19"/>
        </w:numPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="yang_terbakar_1"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="001C53B3" w:rsidRDefault="001D03CF" w:rsidP="001D03CF">
      <w:pPr>
        <w:numPr>
          <w:ilvl w:val="0"/>
          <w:numId w:val="19"/>
        </w:numPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="yang_terbakar_2"/></w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="001C53B3" w:rsidRDefault="001D03CF" w:rsidP="001D03CF">
      <w:pPr>
        <w:numPr>
          <w:ilvl w:val="0"/>
          <w:numId w:val="19"/>
        </w:numPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="yang_terbakar_3"/></w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="001C53B3" w:rsidRDefault="001D03CF" w:rsidP="001D03CF">
      <w:pPr>
        <w:numPr>
          <w:ilvl w:val="0"/>
          <w:numId w:val="19"/>
        </w:numPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="yang_terbakar_4"/></w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00C51F7C" w:rsidRPr="00C51F7C" w:rsidRDefault="00C51F7C" w:rsidP="00C51F7C">
      <w:pPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="360"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00C51F7C">
      <w:pPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">   </w:t>
      </w:r>
      <w:r w:rsidR="00162774">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">Demikian Surat Keterangan  ini kami buat dengan sebenarnya untuk digunakan seperlunya. </w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00162774" w:rsidP="00162774">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="5387"/>
        </w:tabs>
        <w:ind w:left="4536"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="0071307E">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t></w:t>
      </w:r>
      <w:bookmarkStart w:id="0" w:name="_GoBack"/>
      <w:bookmarkEnd w:id="0"/>
      <w:r w:rsidR="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t><xsl:value-of select="nama_kel"/></w:t>
      </w:r>
      <w:r w:rsidR="0015317F" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t xml:space="preserve">, </w:t>
      </w:r>
      <w:r w:rsidR="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t><xsl:value-of select="tanggal_surat"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="5760"/>
        </w:tabs>
        <w:ind w:left="4536"/>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:sz w:val="12"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="001D03CF" w:rsidP="00162774">
      <w:pPr>
        <w:ind w:left="5256" w:firstLine="131"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:spacing w:before="240"/>
        <w:ind w:left="4536" w:right="77"/>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:sz w:val="14"/>
          <w:szCs w:val="22"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00A81095" w:rsidRPr="00C51F7C" w:rsidRDefault="00A81095" w:rsidP="00A81095">
      <w:pPr>
        <w:spacing w:before="240"/>
        <w:ind w:left="4536" w:right="77"/>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:sz w:val="18"/>
          <w:szCs w:val="22"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="0015317F" w:rsidRPr="00C51F7C" w:rsidRDefault="001D03CF" w:rsidP="00162774">
      <w:pPr>
        <w:ind w:left="5000" w:firstLine="0"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:color w:val="000000"/>
          <w:u w:val="single"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:u w:val="single"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_nama"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00CB71EB" w:rsidRPr="00C51F7C" w:rsidRDefault="00162774" w:rsidP="00162774">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="5387"/>
        </w:tabs>
        <w:ind w:left="4536"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="00A81095" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:t>N</w:t>
      </w:r>
      <w:r w:rsidR="00C51F7C" w:rsidRPr="00C51F7C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t xml:space="preserve">IP. </w:t>
      </w:r>
      <w:r w:rsidR="001D03CF">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_nip"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00CB71EB" w:rsidRDefault="00CB71EB" w:rsidP="00C51F7C">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00C51F7C" w:rsidRDefault="00C51F7C" w:rsidP="00CB71EB">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00C51F7C" w:rsidRDefault="00C51F7C" w:rsidP="00CB71EB">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00C51F7C" w:rsidRDefault="00C51F7C" w:rsidP="00CB71EB">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00C51F7C" w:rsidRPr="00C51F7C" w:rsidRDefault="00C51F7C" w:rsidP="00CB71EB">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00C51F7C" w:rsidRDefault="00C51F7C" w:rsidP="00CB71EB">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="000000"/>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:sectPr w:rsidR="00C51F7C" w:rsidSect="003B7F71">
      <w:headerReference w:type="default" r:id="rId9"/>
      <w:pgSz w:w="12240" w:h="18720" w:code="179"/>
      <w:pgMar w:top="540" w:right="1800" w:bottom="1440" w:left="1800" w:header="720" w:footer="720" w:gutter="0"/>
      <w:cols w:space="720"/>
      <w:docGrid w:linePitch="360"/>
    </w:sectPr>

</xsl:for-each>
  </w:body>
</w:document>
</xsl:template>
</xsl:stylesheet>
